<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test', 'didelofr_liliansoler', 'JiORPQLGq.Nk');

 
if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
       $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
       $requser->execute(array($mailconnect, $mdpconnect));
       $userexist = $requser->rowCount();
       $userinfo = $requser->fetch();
       if($userexist == 1 ) {
        if($userinfo['confirm']==1){
          $_SESSION['id'] = $userinfo['id'];
          $_SESSION['pseudo'] = $userinfo['pseudo'];
          $_SESSION['mail'] = $userinfo['mail'];
          header("Location: profil.php?id=".$_SESSION['id']);
       }      
       else        
       {
        $pseudo = $userinfo['pseudo'];
        $longueurKey = 15;
        $key = "";
        for($i=1;$i<$longueurKey;$i++) {
           $key .= mt_rand(0,9);}
        $updatembr = $bdd->prepare("UPDATE membres SET confirmkey=? WHERE mail=?");
        $updatembr->execute(array($key,$mailconnect)); 
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"[Didelo.fr]"<liliansoler@didelo.fr>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
           <body>
              <div align="center">
                 <a href="https://didelo.fr/Tuto/espace_membre/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmez votre compte !</a>
              </div>
           </body>
        </html>
        ';
        mail($mailconnect, "Confirmation de compte", $message, $header);

        $erreur = "Votre adresse mail n'a pas été vérifié";
       }
     }
       else{$erreur = "Mauvais mail ou mot de passe !";}
       }
       
    } else {
       $erreur = "Tous les champs doivent être complétés !";
    }

 ?>
 

<html>
   <head>
      <title>Page de connexion</title>
      <link rel="stylesheet" type="text/css" href="https://www.didelo.fr/Css/theme.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div align="left" style="padding-left: 40%;padding-right:40%;padding-top: 5%;">
         <h2 style="font-size: 4em">Connexion</h2>
         <br /><br />
         <form method="POST" action="" style="font-size: 2em">
         <input type="email" name="mailconnect" placeholder="Mail" />
         <input type="password" name="mdpconnect" placeholder="Mot de passe" />
         <br />
         <br />
         <div align="center">
         <input type="submit" name="formconnexion" value="Se connecter" />
         </div>
         </form>
         <br /><br />
         <div align="center" style="font-size: 2em">
         <a href="inscription.php">Créer un compte</a>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
         </div>
      </div>
   </body>
</html>