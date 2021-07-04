<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page prot&eacute;g&eacute;e par mot de passe</title>
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
</head>

<body>
    <p>Veuillez entrer v&ocirc;tre mot de passe pour acceder &agrave; votre page perso</p>
    <form action="secret_perso.php" method="post">
        <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
        </p>
    </form>
    <p>Cette page est r&eacute;serv&eacute;e au personnel du site didelo.fr . Si vous ne travaillez pas ici, <a href="contact_page_perso.php">demandez un mot de passe afin d'avoir un contenu personalis&eacute; ;-)</p>
</body>

</html>