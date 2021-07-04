<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

$reponse1 = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse1->fetch();
echo $donnees['prix_moyen'];

$reponse1->closeCursor();


?>