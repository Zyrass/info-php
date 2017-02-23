<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espaces &amp; saut de ligne</title>
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

    <h2>Les espaces et sauts de ligne dans php</h2>
    <p>Avec le \n on va pouvoir sauté des lignes dans une chaine de caractère qui sera uniquement entouré de double côtes.</p>
    <p>Le \t permet de générer des tabulation. A savoir pour que le \n et le \t fonctionne, il faut utiliser les balises html pre pour préformater le texte.</p>
    <pre>
      &lt;?php
        $sautDelLigne = "j'aime sauter\n des lignes\n et toi ?";
        echo $sautDelLigne;
      ?&gt;
    </pre>
    <div class="alert alert-info">
      <pre>
      <?php
$sautDelLigne = "j'aime\t\t\t\tsauter\n des lignes\n et toi et aussi j'adore\t\t\t\tles tabulations.";
echo $sautDelLigne;
      ?>
      </pre>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
