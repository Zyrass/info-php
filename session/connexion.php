<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test session</title>

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


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
