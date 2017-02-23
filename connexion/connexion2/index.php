<?php
	// Connexion sécurisé
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=tuto', 'root', '');	
	} catch (PDOException $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	}