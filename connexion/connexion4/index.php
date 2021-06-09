<?php
// Connexion sécurisé avec des constantes
define('HOST', 'mysql:host=localhost;dbname=tuto');
define('USER', 'root');
define('PASSWORD', '');

try {
	$bdd = new PDO(HOST, USER, PASSWORD);
} catch (PDOException $e) {
	die('Erreur de connexion : ' . $e->getMessage());
}
