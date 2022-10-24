<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
<header>
  <a href="index.php" class="title" >Aztecas shop</a>
  <?php if (isset($_SESSION['nombre'])): ?>
    <a href="logout.php"><div class="button">Cerrar sesion</div></a>
  <?php endif; ?>
  <?php if (!isset($_SESSION['nombre'])): ?>
    <a href="login.php"><div class="button">Iniciar sesion</div></a>
  <?php endif; ?>
  <a href=""><div class="button">Settings</div></a>
</header>