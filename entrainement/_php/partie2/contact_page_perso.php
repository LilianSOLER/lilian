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

    $mail_admin = 'liliansoler@didelo.fr';

    $email_message = 'Detail' . "\n" . "\n";
    $email_message .= 'Pseudo :' . $_POST['pseudo'] . "\n";
    $email_message .= 'Mot de passe :' . $_POST['pass'] . "\n";
    $email_message .= 'Nom :' . $_POST['nom'] . "\n";
    $email_message .= 'Prenom :' . $_POST['nom'] . "\n";
    $email_message .= 'Date de naissance :' . $_POST['date_de_naissance'] . "\n";
    $email_message .= 'Message perso :' . $_POST['message'] . "\n";

    $reponse_message = 'Bonjour, ' . $_POST['nom'] . " " . $_POST['prenom'] . ' connu sous le pseudo ' . $_POST['pseudo'] . "\n";
    $reponse_message .= 'je vous envoie ce mail suite à l\'envoi de votre formulaire sur le site didelo.fr ' . "\n" . "\n";
    $reponse_message .= 'Vous pouvez vous connecter à votre page perso grace à ce lien https://didelo.fr/Entrainement_php/partie2/formulaire_page_perso.php , ' . "\n";
    $reponse_message .= 'avec' . $_POST['mot_de_passe'] . ' comme mot de passe';

    if (isset($_POST['email'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail($mail_admin, 'Envoi depuis la page Contact pour page perso', $email_message, 'From: ' . $_POST['email']);
            mail($_POST['email'], 'Réponse suite à l\' envoi du formulaire', $reponse_message, 'From: ' . $mail_admin);


            if ($retour)
                echo '<p>Votre message a &eacute;t&eacute; envoy&eacute;.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }

    ?>
</body>

</html>