<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required><br /><br />
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('liliansoler@didelo.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if ($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
</body>

</html>