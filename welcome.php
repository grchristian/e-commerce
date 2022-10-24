<?php
include 'funciones.php';

session_start();

$config = include 'config.php';

?>

<?php include "templates/header.php"; ?>

<div class="container">
  <div class="row">
    <h1>Bienvenido, <?php echo escapar($_SESSION['nombre']);?> <?php echo escapar($_SESSION['apellido']);?></h1>

  </div>
</div>

<?php include "templates/footer.php"; ?>