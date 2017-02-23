<?php
    ini_set('display_errors', '0');
    echo ini_get('display_errors');
    if (!ini_get('display_errors'))
    {
      ini_set('display_errors', '1');
    }
    echo ini_get('display_errors');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ini_get</title>
    <style media="screen">
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
