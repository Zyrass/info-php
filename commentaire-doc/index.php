<?php include_once("../inc/header.php") ?>

<h2>Les commentaires de type documentation !!</h2>
<p>Je n'ai pas parlé des commentaires surtout au niveau de la documentation en PHP. Ils n'ont rien avoir avec la documentation qu'on peut avoir en html...</p>
<pre>
/**
 * @var $name string;
 * @var $age number;
 **/
 &lt;?php
    $name = "Guillon";
    $age  = 32;
 ?&gt;
    </pre>
<?php
/**
 * @var $name string
 * @var $age number
 **/
$name  = 'Guillon';
$age   = 32;
?>
<?php include_once("../inc/footer.php") ?>