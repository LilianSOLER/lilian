<?php

$ageDuVisiteur = 20 ;
$ageDuVisiteur = 35 ;



$message = "Bonjour !" ;

$estCeVrai = true ;

echo 'Le visiteur a' . $ageDuVisiteur . ' ans' ;

echo '<br/>';

$prix = 2.5 ;
$quantité = 10;

$total = $prix * $quantité ;

echo 'Cela vous fera '. $total . " €" ;
echo '<br/>';


?>

<?php
$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
echo $nombre;
echo '<br/>';
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
echo $nombre;
echo '<br/>';
?>

<?php
$nombre = 2 + 4; // $nombre prend la valeur 6
echo $nombre;
echo '<br/>';
$nombre = 5 - 1; // $nombre prend la valeur 4
echo $nombre;
echo '<br/>';
$nombre = 3 * 5; // $nombre prend la valeur 15
echo $nombre;
echo '<br/>';
$nombre = 10 / 2; // $nombre prend la valeur 5
echo $nombre;
echo '<br/>';

// Allez on rajoute un peu de difficulté
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
echo $nombre;
echo '<br/>';
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
echo $nombre;
echo '<br/>';
?>