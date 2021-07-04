<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/theme.css">
        <title>Page Perso</title>
    </head>
    <body>
        

<?php//importation de la table dans la bdd

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]');

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$sql = "SELECT *  FROM `visiteurs` WHERE `id` IS NOT NULL AND `pseudo` = \'didelo\' AND `mot_de_passe` = \'0308\' AND `prenom` IS NOT NULL AND `nom` IS NOT NULL AND `mail` IS NOT NULL AND `date_naissance` IS NOT NULL AND `message_perso` IS NOT NULL AND `langue` IS NOT NULL";

$bdd->query($sql);

echo '<p>'.$sql['prenom'] . ' - '.$sql['nom'].' - '.$sql['langue'].' euros</p>';






?>