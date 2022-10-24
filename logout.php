<?php

include 'funciones.php';

session_start();

if (isset($_SESSION['email'])) {
  // logout
  session_destroy();
  header('Location: login.php');
}

?>

<?php include 'templates/header.php'; ?>

<?php
if (isset($_SESSION['email'])) {
?>

  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          Has cerrado sesión correctamente
        </div>
      </div>
    </div>
  </div>

<?php
}
?>
