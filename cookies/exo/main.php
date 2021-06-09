.............................................................................................................................................................





































<?php
$duree = 10;
setcookie('titre', $_POST['elise'], time() + $duree, null, null, false, true);
?>
<?php include_once("../../inc/header.php") ?>

<h1>Mon titre est : <?php echo $_COOKIE['titre']; ?></h1>

<?php include_once("../../inc/footer.php") ?>