<?php include_once("../inc/header.php") ?>


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
<?php include_once("../inc/footer.php") ?>