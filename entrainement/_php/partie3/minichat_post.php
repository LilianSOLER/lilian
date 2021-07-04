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

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message,date) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']);

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>