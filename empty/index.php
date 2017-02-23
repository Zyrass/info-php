<?php

  // variable vide
  $test = NULL;
  if ( empty($test)) {
    echo "Essai 1 - Cette variable est vide<br />";
  }
  else {
    echo "Essai 1 - Cette variable contient quelque chose<br />";
  }

  // variable pas vide
  $test = 'Coucou';
  if ( empty($test)) {
    echo "Essai 2 - Cette variable est vide<br />";
  }
  else {
    echo "Essai 2 - Cette variable contient quelque chose<br />";
  }

  // Variable pas vide
  $test = NULL;
  if ( !(empty($test))) {
    echo "Essai 3 - Cette variable est vide<br />";
  }
  else {
    echo "Essai 3 - Cette variable contient quelque chose<br />";
  }

  // Variable vide
  $test = 'Salut la 3wa';
  if ( !(empty($test))) {
    echo "Essai 4 - Cette variable est vide<br />";
  }
  else {
    echo "Essai 4 - Cette variable contient quelque chose<br />";
  }
