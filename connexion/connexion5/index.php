<?php
	// Connexion sécurisé avec l'initialisation d'un tableau d'erreur via PDO
	define('HOST', 'mysql:host=localhost;dbname=tuto');
	define('USER', 'root');
	define('PASSWORD', '');

	try {
		$bdd = new PDO(HOST, USER, PASSWORD);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	}