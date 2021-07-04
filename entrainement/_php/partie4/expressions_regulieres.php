<?php
if (preg_match("** Votre REGEX **", "Ce dans quoi vous faites la recherche"))
{
	echo 'Le mot que vous cherchez se trouve dans la chaîne';
}
else
{
	echo 'Le mot que vous cherchez ne se trouve pas dans la chaîne';
}
?>

<?php
if (preg_match("#guitare#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#piano#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#Guitare#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#GUITARE#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#Guitare#i", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare#i", "Vive la GUITARE !"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare#", "Vive la GUITARE !"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare|piano#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare|piano#", "J'aime jouer de la piano."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare|piano#", "J'aime jouer de la banjo."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#guitare|piano|banjo#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^Bonjour#", "Bonjour petit zéro"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#zéro$#", "Bonjour petit zéro"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^zéro#", "Bonjour petit zéro"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#zéro$#", "Bonjour petit zéro !!!"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#gr[aoi]s#", "La nuit, tous les chats sont gris"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#gr[aoi]s#", "Berk, c'est trop gras comme nourriture"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#gr[aoi]s$#", "Berk, c'est trop gras comme nourriture"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[aeiouy]$#", "Je suis un vrai zéro"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^[aeiouy]#", "Je suis un vrai zéro"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[a-z]#", "Cette phrase contient une lettre"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[A-Z0-9]#", "cette phrase ne comporte ni majuscule ni chiffre"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^[0-9]#", "Je vis au 21e siècle"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#<h[1-6]>#", "<h1>Une balise de titre HTML</h1>"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[^0-9]#", "Cette phrase contient autre chose que des chiffres"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[^A-Z0-9]#", "cette phrase contient autre chose que des majuscules et des chiffres"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^[^a-z]#", "Cette phrase ne commence pas par une minuscule"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[^aeiouy]$#", "Cette phrase ne se termine pas par une voyelle"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#e+#", "eeee"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#u?$#", "ooo"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#[0-9]+#", "magnifique"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#Ŷaho+$#", "Yahooooooooo"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^Yaho+$#", "Yahooooooo c'est génial"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^Bla(bla)*$#", "Blablablabla"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#e{2,}#", "eeeee"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^Bla(bla){4}$#", "Blablabla"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>

<?php
if (preg_match("#^[0-9]{6}$#", "546781"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>





