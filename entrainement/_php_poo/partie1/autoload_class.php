<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiliser une class : auto-chargement de classes</title>
    <link rel="stylesheet" type="text/css" href="css/_index.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include("../../../php/script.php"); ?>
</head>

<body>
    <div class='tout'>
        <?php include("../../../php/script.php"); ?>
        <div class="html">
            <h1>Utiliser une class : auto-chargement de classes</h1>
            <p>
                function chargerClasse($classe){</br>
                require $classe . '.php'; // On inclut la classe correspondante au paramètre</br>
                }</br>
                </br>
                spl_autoload_register('chargerClasse'); //On enregistre a fonction en autoload pour qu'elle soit appelé dès qu'on instanciera une classe non déclarée.</br>

                $perso = new Personnage;</br>
            </p>

        </div>
    </div>


    <?php include("../../../php/script.php"); ?>
    <!-- 728x90_btf  Leader board-->
    <ins data-zone="234867" class="byadthink"></ins>
    <script type="text/javascript" async src="//ad.adxcore.com/adjs_r.php?async&what=zone:234867&inf=no"></script>

    </div>
</body>

</html>