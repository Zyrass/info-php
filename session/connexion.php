<?php
session_start();
?>
<?php include_once("../inc/header.php") ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 col-offset-md-1">
      <h1 class="text-center">My session test with php</h1>
      <hr>
      <form action="contenu.php" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="firstname">Firstname</label>
              <input type="text" name="firstname" class="form-control" id="firstname" placeholder="You're firstname here">
              <p class="help-block">Please, enter you're firstname, it's important !</p>
            </div>
            <div class="col-md-6">
              <label for="lastname">Lastname</label>
              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="you're lastname here !">
              <p class="help-block">Please, enter you're lastname, it's important !</p>
            </div>
          </div>
          <hr>
          <div class="col-md-12">
            <button type="submit" name="send" class="btn btn-block btn-default">Send you're form</button>
          </div>
        </div> <!-- Fin du form-group -->
      </form>
    </div>
  </div>
</div>


<?php include_once("../inc/footer.php") ?>