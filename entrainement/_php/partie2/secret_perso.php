<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
    <title>Page Perso</title>
</head>

<body>


    <?php //Donn&eacute;es utilisateurs
    include('fonction.php');
    include('donnee.php');
    ?>

    <?php //Execution

    for ($compteur = 0; $compteur <= $max_info; $compteur++) {
        if ($info[$compteur]['mot_de_passe'] == $_POST['mot_de_passe']) {
            echo '<h1>Voici v&ocirc;tre page perso :</h1>';
            echo description($info[$compteur]);
            break;
        } elseif ($_POST['mot_de_passe'] == 'pascal') {
            include("pascal.php");
            break;
        } elseif ($compteur == $max_info and $info[$compteur]['mot_de_passe'] != $_POST['mot_de_passe']) {
            echo '<p>Mot de passe incorrect</p>';
            echo '<p><a href="formulaire_tp_perso.php">R&eacute;esayer </a></p>';
            echo '<p><a href="mailto:soler.lilian64@gmail.com" target="_blank"> Si vous n\'en avez pas, n\'h&eacute;siter pas &agrave; en demandez un afin d\'avoir un contenu personalis&eacute; ;-)</a></p>';
        }
    }




    ?>


</body>

</html>