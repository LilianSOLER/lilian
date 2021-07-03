<!doctype html>
<html lang="fr">

<head>

    <meta charset='utf-8'>
    <title>Site de Lilian SOLER</title>
    <link rel="stylesheet" type="text/css" href="https://www.didelo.fr/Css/theme.css">
    <link rel="stylesheet" type="text/css" href="https://didelo.fr/Css/Acceuil/index.css">
    <?php include("../Php/script.php"); ?>
   
</head>

<body>

    <?php include("../Php/header.php"); ?>
    
    <div id="conteneur2">
        <?php include("../Php/menu.php"); ?>
        <?php include("../Php/section.php"); ?>        
    </div>
    <div id='message'>
        <?php include("../Php/footer.php"); ?> 
    </div>
    
    <p id="php"><?php include("../Php/ip.php"); ?></p>
    
    <script>
        setInterval('load_messages()',1500);
        function load_messages(){
            $('#message').load('../Php/footer.php');
        }
    </script>
</body>

</html>