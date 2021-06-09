<?php include_once("../inc/header.php") ?>

<h2>Découverte d'un benchmark</h2>
<p>Un benchmark pratique à utiliser pour voir qu'elle est la meilleur version la plus rapide dans nos concaténation.</p>
<?php
// 1 chaine avec des doubles côtes
$start = microtime();
for ($i = 0; $i < 7000000; $i++) {
  $assign = "i -> $i";
}
$end = microtime() - $start;

// 2 chain avec les simples côtes
$start2 = microtime();
for ($i = 0; $i < 7000000; $i++) {
  $assign2 = 'i -> ' . $i;
}
$end2 = microtime() - $start2;

// 3 chain avec le sprintf
$start3 = microtime();
for ($i = 0; $i < 7000000; $i++) {
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

<?php include_once("../inc/footer.php") ?>