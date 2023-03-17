<?php

//prendo input della pfrase
$scritto = $_GET['scritto'];

//prendo input parola che voglio censurare
$da_censurare = $_GET['censurare'];
var_dump($_GET);



$p =$scritto;
var_export($p);


?>

<h1>Frase Originale: <?php echo $scritto ?> </h1>


<h1>Frase con parola Censurata  </h1>