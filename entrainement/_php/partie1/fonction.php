
<?php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caract&egrave;res :<br />' . $phrase;
?>

<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;
?>

<?php
$chaine = 'Cette cha&icirc;ne va &ecirc;tre m&eacute;lang&eacute;e !';
$chaine = str_shuffle($chaine);
 
echo $chaine;
?>

<?php
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);
 
echo $chaine;
?>

<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>

<?php
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('Fran&ccedil;ois');
DireBonjour('Beno&icirc;t');
DireBonjour('P&egrave;re No&euml;l');
?>

<?php
// Calcul du volume d'un c&ocirc;ne de rayon 5 et de hauteur 2
$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo 'Le volume du c&ocirc;ne de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

// Calcul du volume d'un c&ocirc;ne de rayon 3 et de hauteur 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'Le volume du c&ocirc;ne de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';
?>

<?php
// Ci-dessous, la fonction qui calcule le volume du c&ocirc;ne
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur &agrave; renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un c&ocirc;ne de rayon 3 et de hauteur 1 est de ' . $volume;
?>