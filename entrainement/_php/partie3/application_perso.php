<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
    <title>Formulaire pour la page perso</title>
</head>

<body>
    <h1>Formulaire pour la page perso</h1>
    <form method="post">
        <fieldset>
            <legend>Vos identifiants</legend>
            <p>
                <label for="pseudo">Votre pseudo :</label>
                <input type="text" name="pseudo" required />

                <br />
                <label for="pass">Votre mot de passe :</label>
                <input type="password" name="pass" required />

            </p>
        </fieldset>
        <fieldset>
            <legend>Vos informations pour la page perso</legend> <!-- Titre du fieldset -->
            <p>
                <label for="nom">Quel est votre nom ?</label>
                <input type="text" name="nom" required />
                <br />
                <label for="prenom">Quel est votre pr&eacute;nom ?</label>
                <input type="text" name="prenom" required />
                <br />
                <label for="date_de_naissance">Veuillez saisir votre date de naissance :</label>
                <input type="date" name="date_de_naissance">
                <br />
                <br />
                <label>Message personalis&eacute;</label>
                <textarea name="message" required></textarea>
                <br />
                <br />
                <label for="email">Quel est votre e-mail ?</label>
                <input type="email" name="email" required />
            </p>
            <br />
            <p>
                <input type="submit" value="Envoyer" />
            </p>

        </fieldset>
    </form>


    <?php
    echo 'Entrée dans le php';

    include('envoie_formulaire.php');

    echo 'après tout, doit s afficher h24';


    try {
        $bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    echo 'new pdo effectué';

    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['pass'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $message_perso = $_POST['message'];

    $req = $bdd->prepare('INSERT INTO visiteurs(pseudo, mot_de_passe, prenom, nom, mail, date_naissance, message_perso) VALUES(:pseudo, :mot_de_passe, :prenom, :nom, :mail, :date_naissance, :message_perso)');
    $req->execute(array(
        'pseudo' => $pseudo,
        'mot_de_passe' => $mot_de_passe,
        'prenom' => $prenom,
        'nom' => $nom,
        'mail' => $mail,
        'date_naissance' => $date_naissance,
        'message_perso' => $message_perso
    ));
    echo var_dump($req);

    echo 'Le jeu a bien été ajouté !';


    $req->closeCursor();
    header('Location: application_perso.php?requete="faite"');
    ?>

</body>

</html>