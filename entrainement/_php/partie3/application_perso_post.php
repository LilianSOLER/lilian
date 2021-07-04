<?php
    echo 'Entrée dans le php';

   include('envoie_formulaire.php');

    echo 'après tout, doit s afficher h24';


    try{
        $bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    echo 'new pdo effectué';

    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['pass'];
    $prenom = $_POST['prenom'] ;
    $nom = $_POST['nom'] ;
    $mail = $_POST['email'] ;
    $date_naissance = $_POST['date_naissance'] ;
    $message_perso = $_POST['message'] ;

    $req = $bdd->prepare('INSERT INTO visiteurs(pseudo, mot_de_passe, prenom, nom, mail, date_naissance, message_perso) VALUES(:pseudo, :mot_de_passe, :prenom, :nom, :mail, :date_naissance, :message_perso)');
    $req->execute(array(
        'pseudo' => $pseudo,
        'mot_de_passe' => $mot_de_passe,
        'prenom' => $prenom,
        'nom' => $nom,
        'mail' => $mail,
        'date_naissance' => $date_naissance,
        'message_perso'=> $message_perso
        ));
    echo var_dump ($req);

    echo 'Le jeu a bien été ajouté !';
    
    
    $req->closeCursor();
    header('Location: application_perso.php?requete="faite"');
