<?php

//prendo input della pfrase
$scritto = $_GET['scritto'];

//prendo input parola che voglio censurare
$da_censurare = $_GET['censurare'];
var_dump($_GET);



$esplicito = $scritto;
var_dump($esplicito);

$censura = str_replace($da_censurare, '***', $esplicito);



?>

<h2>Frase Originale: <?php echo $scritto ?> </h2>
<h2>Parola da Censurare: <?php echo $da_censurare ?> </h2>

<h1>Frase con parola Censurata: <?php echo $censura ?>  </h1>