<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page prot&eacute;g&eacute;e par mot de passe</title>
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
</head>

<body>
    <p>Veuillez entrer votre mot de passe pour acceder &agrave; votre page perso</p>
    <form action="cible_bdd_page_perso.php" method="post">
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required /><br />
            <label for="mot_de_passe">Mot de passe</label> : <input type="password" name="mot_de_passe" required /><br />
            <input type="submit" value="Valider" /><br />
        </p>
    </form>
    <p>Cette page est r&eacute;serv&eacute;e au personnel du site didelo.fr . Si vous ne travaillez pas ici, <a href="contact_page_perso.php">demandez un mot de passe afin d'avoir un contenu personalis&eacute; ;-)</p>
</body>

</html>