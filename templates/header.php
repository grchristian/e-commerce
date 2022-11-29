<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>