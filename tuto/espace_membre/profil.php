<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test', 'didelofr_liliansoler', 'JiORPQLGq.Nk');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
?>

<html>
   <head>
      <title>Page de profil</title>
      <link rel="stylesheet" type="text/css" href="https://www.didelo.fr/Css/theme.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center"style="padding-left: 25%;padding-right:25%;font-size: 2em;">
      <h2>Profil de <?php echo $userinfo['pseudo']; ?> : </h2>               
          <img src="membres/avatars/<?php echo $userinfo['avatar']; ?> " width="480"/>         
         <br />
         <br />
         Pseudo : <?php echo $userinfo['pseudo']; ?>
         <br />        
         Nom : <?php echo $userinfo['nom']; ?>
         <br />        
         Prenom : <?php echo $userinfo['prenom']; ?>
         <br />       
         Date de naissance : <?php echo $userinfo['naissance']; ?>
         <br />
         Mail : <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="edition_profil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>