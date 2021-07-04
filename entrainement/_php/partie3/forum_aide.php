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
    $mail_admin = 'mon_mail';

    $email_message = 'Detail' . "\n" . "\n";
    $email_message .= 'Pseudo :' . $_POST['pseudo'] . "\n";
    $email_message .= 'Mot de passe :' . $_POST['pass'] . "\n";
    $email_message .= 'Nom :' . $_POST['nom'] . "\n";
    $email_message .= 'Prenom :' . $_POST['prenom'] . "\n";
    $email_message .= 'Date de naissance :' . $_POST['date_de_naissance'] . "\n";
    $email_message .= 'Message perso :' . $_POST['message'] . "\n";

    $reponse_message = 'Bonjour, ' . $_POST['nom'] . " " . $_POST['prenom'] . ' connu sous le pseudo ' . $_POST['pseudo'] . "\n";
    $reponse_message .= 'je vous envoie ce mail suite à l\'envoi de votre formulaire sur le site didelo.fr ' . "\n" . "\n";
    $reponse_message .= 'Vous pouvez vous connecter à votre page perso grace à ce lien https://didelo.fr/entrainement/_php/partie2/formulaire_page_perso.php , ' . "\n";
    $reponse_message .= 'avec ' . $_POST['pass'] . ' comme mot de passe';

    if (isset($_POST['email'])) {
        echo 'Entrée dans le premier if';
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false) {
            echo 'Entrée dans le second if';
            echo '<p>Votre email doit comporter un arobase.</p>';
        } else {
            $bdd = new PDO('mysql:host=localhost;dbname=ma_base;charset=utf8', 'nom', 'mot_de_passe', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            echo 'new pdo effectué';
            $pseudo = $_POST['pseudo'];
            $mot_de_passe = $_POST['pass'];
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $mail = $_POST['email'];
            $date_naissance = $_POST['date_naissance'];
            $message_perso = $_POST['message'];

            $req = $bdd->prepare('INSERT INTO ma_table(pseudo, mot_de_passe, prenom, nom, mail, date_naissance, message_perso) VALUES(:pseudo, :mot_de_passe, :prenom, :nom, :mail, :date_naissance, :message_perso)');
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

            $retour = mail($mail_admin, 'Envoi depuis la page Contact pour page perso', $email_message, 'From: ' . $_POST['email']);
            mail($mail, 'Réponse suite à l\' envoi du formulaire', $reponse_message, 'From: ' . $mail_admin);
            if ($retour) {
                echo '<p>Votre message a &eacute;t&eacute; envoy&eacute;.</p>';
            } else {
                echo '<p>Erreur.</p>';
            }
        }
    }

    echo 'après tout, doit s afficher h24';

    ?>

</body>

</html>