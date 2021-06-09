<?php
include '../connexion/connexion5/index.php';

// Méthode préparé
$request = $bdd->prepare('UPDATE `compteur` SET `visiteur` = `visiteur` + 1');
$request->execute();
$request->closeCursor();
?>
<?php include_once("../inc/header.php") ?>


<h1>Compteurs de visite : <small><?php
																	$request = $bdd->prepare('SELECT `visiteur` FROM `compteur`');
																	$request->execute();
																	$data = $request->fetch();
																	$request->closeCursor();

																	echo $data['visiteur'];
																	?></small></h1>
<h2>Préambule</h2>
<p>Concevoir la base de donnée.</p>
<fieldset>
	<ol>
		<li>nom bdd avec 2 champs</li>
		<ul>
			<li>id - INT</li>
			<li>visiteur - INT</li>
		</ul>
		<li>On initialise le compteur à un en ajoutant une entrée</li>
		<li>on test la requête sql permettant d'incrémenter notre compteur</li>
		<ul>
			<li>
				<fieldset>
					UPDATE compteur SET visiteur = visiteur + 1
				</fieldset>
			</li>
		</ul>
	</ol>
</fieldset>

<h2>Etape 1 - se connecter à la bdd</h2>
<p>En tout premier lieu on va se connecter à la base de donnée.</p>
<fieldset>
	<pre>
&lt;?php 
	include '../connexion/connexion5/connexion.php';
		</pre>
</fieldset>

<h2>Etape 2 - preparer la requête SQL</h2>
<p>on a testé la requête directement dans phpmyadmin et notre donnée c'était bien incrémentée. Ainsi donc nous allons créer une variable qui va stocker la requête sql qu'on aura essayé.</p>
<p>Donc toujours avec le php ouvert, on saisi :</p>
<fieldset>
	<pre>
	$request = $bdd->prepare('UPDATE `compteur` SET `visiteur` = `visiteur` + 1);
		</pre>
</fieldset>
<p>ensuite toujours en php on saisie notre variable ou on a stocker la requete et on l'exécute.</p>
<fieldset>
	<pre>
	$request->execute();
		</pre>
</fieldset>
<p>on fini par fermer le cursor qui permettra de fermer la requête en cours afin d'en utiliser une autre mais elle permettra aussi d'être réappelé. On ferme également le php.</p>
<fieldset>
	<pre>
	$request->closeCursor();
?&gt;
	
		</pre>
</fieldset>

<h2>Etape 3 - On raffraichi la page</h2>
<p>Le but de rafraichir la page permet de voir si dans la base de donnée, la mise à jour se fait.</p>

<h2>Etape 4 - On affiche le résultat</h2>
<p>Pour afficher le résultat on réouvre les balises php et on répète l'étape 2 avec cette fois-ci un SELECT pour sélectionner le champ visiteur.</p>
<fieldset>
	<pre>
&lt;?php
	$request = $bdd->prepare('SELECT `visiteur` FROM `compteur`);
		</pre>
</fieldset>
<p>Ensuite on exécute la requête préparer</p>
<fieldset>
	<pre>
	$request->execute();
		</pre>
</fieldset>
<p>Une fois exécuter on créer une nouvelle variable ou l'on va chercher grace à fetch l'information saisi.</p>
<fieldset>
	<pre>
	$data = $request->fetch();
		</pre>
</fieldset>
<p>On termine par fermer le cursor et on ferme PHP</p>
<fieldset>
	<pre>
	$request->closeCursor();
?&gt;
		</pre>
</fieldset>

<h2>Etape 5 - Affichage à l'écran du résultat</h2>
<p>pour afficher le résultat on va faire un écho de notre variable $data['visiteur']</p>
<fieldset>
	<pre>
&lt; echo $data['visiteur'] . ' visites sur ce site'; ?&gt;			
		</pre>
</fieldset>
<?php include_once("../inc/footer.php") ?>