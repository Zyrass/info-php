<?php include_once("../inc/header.php") ?>

<?php

// variable n'existe pas
$test = NULL;
if (isset($test)) {
  echo "Essai 1 - Cette variable existe<br />";
} else {
  echo "Essai 1 - Cette variable n'existe pas<br />";
}

// variable existe vu qu'elle contient quelque chose
$test = 'Coucou';
if (isset($test)) {
  echo "Essai 2 - Cette variable existe<br />";
} else {
  echo "Essai 2 - Cette variable n'existe pas<br />";
}

// Variable existe vu qu'on demande le contraire.
$test = NULL;
if (!(isset($test))) {
  echo "Essai 3 - Cette variable existe<br />";
} else {
  echo "Essai 3 - Cette variable n'existe pas<br />";
}

// Variable n'existe pas vu qu'également on demande son contraire.
$test = 'Salut la 3wa';
if (!(isset($test))) {
  echo "Essai 4 - Cette variable existe<br />";
} else {
  echo "Essai 4 - Cette variable n'existe pas<br />";
}
?>
  <?php include_once("../inc/footer.php") ?>
