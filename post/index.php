<?php include_once("../inc/header.php") ?>

<form action="result.php" method="post">
  <label for="pseudo">pseudo</label>
  <input type="text" name="pseudo" placeholder="votre pseudo" id="pseudo">
  <label for="prenom">prenom</label>
  <input type="text" name="prenom" placeholder="votre prenom" id="prenom">
  <hr>
  <button type="submit" name="submit">Envoyer</button>
</form>

<?php include_once("../inc/footer.php") ?>