<?php
session_start();
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['firstname'] = $_POST['firstname'];
?>
<?php include_once("../inc/header.php") ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1><?= $_SESSION['lastname'] . ' ' . $_SESSION['firstname']; ?> présente son histoire.</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="deconnexion.php" class="btn btn-block btn-primary">Se déconnecter du site</a>
    </div>

  </div>

</div>

<?php include_once("../inc/footer.php") ?>