<?php include_once("../inc/header.php") ?>

<h1>Fonction sprintf() la concaténation des experts.</h1>
<p>la fonction sprintf() retourne une chaine formater</p>
<p>Voir sur la doc le fonctionner. Pas mal d'information sont utile.</p>

Exemple :
<pre>
        &lt;?php
          $test = "Je suis une chaine de caractère.";
          $question = "Qui est tu";
          $result = sprintf("%s ? %s", $question, $test);
        ?&gt;
    </pre>
<div class="alert alert-info">
  <?php
  $test    = "Je suis une chaine de caractère.";
  $question = "Qui es-tu";
  $result  = sprintf("%s ? %s", $question, $test);

  echo $result;
  ?>
</div>

<?php include_once("../inc/footer.php") ?>