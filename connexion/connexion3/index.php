<?php
// Connexion sécurisé avec des variables
$host 		=	'mysql:host=localhost;dbname=tuto';
$user 		=	'root';
$password 	=	'';

try {
	$bdd = new PDO($host, $user, $password);
} catch (PDOException $e) {
	die('Erreur de connexion : ' . $e->getMessage());
}
