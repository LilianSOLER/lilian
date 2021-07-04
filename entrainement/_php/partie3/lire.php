<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
   </p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête

$reponse1 = $bdd->query('SELECT nom, console FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 5');

while ($donnees1 = $reponse1->fetch())
{
	echo '<p>'.$donnees1['console'] . ' - '.$donnees1['nom'].'</p>';
}

$reponse1->closeCursor();

if(isset($_GET['console']))
{
    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
    $requete ->execute(array($_GET['console']));
    while ($donnees3 = $requete->fetch())
    {
        echo '<p>'.$donnees3['console'] . ' - '.$donnees3['nom'].' - '.$donnees3['prix'].' euros</p>';
    }
    
    $requete->closeCursor();
}



?>