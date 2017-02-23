<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fonction anonyme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Information sur les fonction anonymes</h1>
          <p>Les fonctions anonymes, aussi appelées fermetures ou closures permettent la création de fonctions sans préciser leur nom. <small><a href="http://php.net/manual/fr/functions.anonymous.php">source : doc php.net</a></small></p>

          <h2>La syntaxe :</h2>
          <pre>
&lt;?php
  // Conception d'une variable avec une fonction anonyme (sans nom)
  $maVariableAno = fonction()
  {
    echo 'salut je suis une variable ano';
  }
?&gt;
          </pre>
          <?php
            $maVariableAno = function()
            {
                echo 'Salut je suis une variable anonyme';
            }
          ?>

          <h2>appel de cette fonction anonyme</h2>
          <p>C'est comme pour une fonction classique, pour l'appeler, on saisi le nom de la variable avec des parenthèses.</p>
          <pre>
&lt;?php
  // Conception d'une variable avec une fonction anonyme (sans nom)
  $maVariableAno();
?&gt;
          </pre>
          <div class="alert alert-info">
<p><?php $maVariableAno(); ?></p>
          </div>

          <h2>Ajout d'un argument</h2>
          <p>C'est exactement la même chose qu'avec les fonctions.</p>
          <pre>
&lt;?php
  // Conception d'une variable avec une fonction anonyme (sans nom)
  $maVariableAno2 = function(string $info)
  {
    echo 'salut je suis une variable ano ' . $info;
  }
?&gt;
          </pre>
          <?php
            /**
             * function $maVariableAno2 - display message
             * @param $info string
             **/
            $maVariableAno2 = function($info)
            {
              printf('salut je suis une variable ano ' . $info);
            }
          ?>

          <h2>appel de la fonction anonyme avec un argument</h2>
          <pre>
&lt;?php
  // Conception d'une variable avec une fonction anonyme (sans nom)
  $maVariableAno2('et moi je suis un argument qui sera affiché');
?&gt;
          </pre>
          <div class="alert alert-info">
<p><?php $maVariableAno2('et moi je suis un argument qui sera affiché'); ?></p>
          </div>
        </div> <!-- close col-md-12 -->
      </div> <!-- close row -->


    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
