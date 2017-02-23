<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sdgjsdlkgjsl</title>
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
    <h2>Découverte d'un benchmark</h2>
    <p>Un benchmark pratique à utiliser pour voir qu'elle est la meilleur version la plus rapide dans nos concaténation.</p>
    <?php
      // 1 chaine avec des doubles côtes
      $start = microtime();
      for ($i = 0; $i <7000000; $i++)
      {
        $assign = "i -> $i";
      }
     $end = microtime() - $start;

     // 2 chain avec les simples côtes
     $start2 = microtime();
     for ($i = 0; $i <7000000; $i++)
     {
       $assign2 = 'i -> ' . $i;
     }
     $end2 = microtime() - $start2;

     // 3 chain avec le sprintf
     $start3 = microtime();
     for ($i = 0; $i <7000000; $i++)
     {
       $assign3 = sprintf('i -> %s', $i);
     }
     $end3 = microtime() - $start3;

     echo "<br />Temps guillemets double : $end";
     echo "<br />Temps guillemets simple : $end2";
     echo "<br />Temps sprintf() : $end3";
    ?>
    <div class="well">
    <hr>
      <pre>
        &lt;?php
           // 1 chaine avec des doubles côtes
           $start = microtime();
           for ($i = 0; $i <7000000; $i++)
           {
             $assign = "i -> $i";
           }
          $end = microtime() - $start;

          // 2 chain avec les simples côtes
          $start2 = microtime();
          for ($i = 0; $i <7000000; $i++)
          {
            $assign2 = 'i -> ' . $i;
          }
          $end2 = microtime() - $start2;

          // 3 chain avec le sprintf
          $start3 = microtime();
          for ($i = 0; $i <7000000; $i++)
          {
            $assign3 = sprintf('i -> %s', $i);
          }
          $end3 = microtime() - $start3;

          echo "&lt;br /&gt;Temps guillemets double : $end";
          echo "&lt;br /&gt;Temps guillemets simple : $end2";
          echo "&lt;br /&gt;Temps sprintf() : $end3";
        ?&gt;
      </pre>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
