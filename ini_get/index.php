<?php
ini_set('display_errors', '0');
echo ini_get('display_errors');
if (!ini_get('display_errors')) {
  ini_set('display_errors', '1');
}
echo ini_get('display_errors');
?>
<?php include_once("../inc/header.php") ?>

<h1>Information sur les erreurs</h1>
<hr>
<p>A cette adresse : <a href="http://php.net/manual/fr/ini.list.php">php.net</a> nous pouvons récupérer le contenu du fichier .ini</p>

<p>J'ai découvert que via un script php nous pouvons éditer son contenu directement. Le lien plus haut permet de voir le contenu du php.ini afin qu'on puisse le modifié à notre convenance. L'avantage de ce manuel c'est qu'on aura les valeurs par défauts ;D</p>

<p>Le code php qui suis ci-dessous permet de modifier le display_errors du fichier.ini</p>

<pre>
      &lt;?php
        echo ini_get('display_errors');
        if (ini_get('display_errors'))
        {
          ini_set('display_errors', '1');
        }
        echo ini_get('display_errors');
      ?&gt;
    </pre>

<?php include_once("../inc/footer.php") ?>