<?php include_once("../inc/header.php") ?>


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
      $maVariableAno = function () {
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
      $maVariableAno2 = function ($info) {
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

<?php include_once("../inc/footer.php") ?>