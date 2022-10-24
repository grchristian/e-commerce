<?php

include 'funciones.php';

if (isset($_POST['submit'])) {
  // login with email and password
  $resultado = [
    'error' => false,
    'mensaje' => 'Login exitoso'
  ];

  $config = include 'config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $consultaSQL = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
    if ($resultado) {
      // login successful
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $resultado[0]['id'];
      $_SESSION['nombre'] = $resultado[0]['nombre'];
      $_SESSION['apellido'] = $resultado[0]['apellido'];
      header('Location: welcome.php');
    } else {
      // login failed
      $resultado['error'] = true;
      $resultado['mensaje'] = 'Email o contraseña incorrectos';
    }

  } catch (PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

<?php include 'templates/header.php'; ?>

<?php
if (isset($resultado)) {
?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>

<div class="container">
  <form method="post">
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="email" name="email" class="form-control" />
      <label class="form-label" for="email">Email</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="password" name="password" class="form-control" />
      <label class="form-label" for="password">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Login</button>

  </form>
</div>

<?php include 'templates/footer.php'; ?>