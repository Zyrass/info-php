<?php
$dureeCookie = 365 * 24 * 3600;
setcookie('pseudo', 'zyrass', time() + $dureeCookie);

$dureeCookie2 = 10;
setcookie('prenom', 'alain', time() + $dureeCookie2, null, null, false, true);

// unset($_COOKIE['pseudo']);
// setcookie('pseudo');

?>
<?php include_once("../inc/header.php") ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">cookies</h1>
      <hr>
      <div class="well">
        <h2>Syntaxe du cookie</h2>
        <pre class="bg-info">
0 - Une variable permettant de définir le temps
1 - fonction setcookie(param1, param2, param3)
2 - param 1 - le nom du cookie
3 - param 2 - la valeur du cookie
4 - param 3 - la fonction time() + l'expiration du cookie
            </pre>
      </div>

      <div class="well">
        <h2>Dans mon cas :</h2>
        <pre class="bg-info">
<strong>365 jours * 24h * 3600 secondes</strong>
$dureeCookie = 365*24*3600; <strong>permet d'afficher le cookie sur 1 an</strong>
setcookie('pseudo', 'zyrass', time()+$dureeCookie);
<hr>
<strong>Pour l'exemple d'un cookie de 10 secondes</strong>
$dureeCookie2 = 10;
setcookie('prenom', 'alain', time()+$dureeCookie2);
            </pre>
      </div>

      <div class="well">
        <h2>Le résultat ci dessous.</h2>
        <p>pseudo = <?php echo $_COOKIE['pseudo']; ?></p>
        <p>prénom = <?php echo $_COOKIE['prenom']; ?></p>
        <div class="alert alert-info">
          <p><?= var_dump('pseudo durée 1 an : ' . $_COOKIE['pseudo'] . '/ prenom durée 10 secondes : ' . $_COOKIE['prenom']); ?></p>
        </div>
      </div>
    </div>


  </div> <!-- Fin div row -->
</div> <!-- Fin div container -->
<?php include_once("../inc/footer.php") ?>