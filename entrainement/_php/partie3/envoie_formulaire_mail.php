<?php   
    $mail_admin ='liliansoler@didelo.fr';
    $mail = $_POST['email'] ;

    $email_message = 'Detail'."\n"."\n";
    $email_message .= 'Pseudo :'.$_POST['pseudo']."\n";
    $email_message .= 'Mot de passe :'.$_POST['pass']."\n";
    $email_message .= 'Nom :'.$_POST['nom']."\n";
    $email_message .= 'Prenom :'.$_POST['nom']."\n";
    $email_message .= 'Date de naissance :'.$_POST['date_de_naissance']."\n";
    $email_message .= 'Message perso :'.$_POST['message']."\n";

    $reponse_message = 'Bonjour, '. $_POST['nom']." ".$_POST['prenom'].' connu sous le pseudo '.$_POST['pseudo']."\n";
    $reponse_message .= 'je vous envoie ce mail suite à l\'envoi de votre formulaire sur le site didelo.fr '."\n"."\n";
    $reponse_message .= 'Vous pouvez vous connecter à votre page perso grace à ce lien https://didelo.fr/Entrainement_php/partie2/formulaire_page_perso.php , '."\n";
    $reponse_message .= 'avec'.$_POST['mot_de_passe'].' comme mot de passe';

    if (isset($_POST['email'])) {        
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail($mail_admin, 'Envoi depuis la page Contact pour page perso',$email_message, 'From: ' . $_POST['email']);
            mail($_POST['email'],'Réponse suite à l\' envoi du formulaire',$reponse_message,'From: '.$mail_admin);
                
                
        if($retour)
            echo '<p>Votre message a &eacute;t&eacute; envoy&eacute;.</p>';
         else
            echo '<p>Erreur.</p>';
            }
    } 

?>
          
