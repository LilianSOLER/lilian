<!doctype html>
<html lang="fr">

<head>

    <meta charset='utf-8'>
    <title>Site de Lilian SOLER</title>
    <link rel="stylesheet" type="text/css" href="https://www.didelo.fr/Css/theme.css">
    <link rel="stylesheet" type="text/css" href="https://didelo.fr/Css/Acceuil/index.css">
    <?php include("script_test.php"); ?>
    <link rel="stylesheet" type="text/css" href="index_test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="social_bar.css">
   
</head>

<body>
<nav class='content'>
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">Acceuil</a>
    <div class="dropdown">
      <button class="dropbtn">Correction
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a title="Arduino: Programmes Divers et Corrections des TD"href="https://didelo.fr/Arduino/Arduino.html" target="_blank">Arduino</a>
          <a title="Introduction au Web (HTML et CSS) : Correcttions des TD" href="https://didelo.fr/Web/Web.html" target="_blank">Intro au Web</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Teacher
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a href="http://users.polytech.unice.fr/~pmasson/Enseignement.htm" target="_blank">Pascal Masson(Arduino)</a>
          <a href="http://users.polytech.unice.fr/~vg/" target="_blank">Vincent Granet(POO JAVA)</a>            
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Cours
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a title="Cours particuliers pour Amandine" href="https://didelo.fr/Cours/cours_amandine.html" target="_blank">Amandine</a>
          <a title="Cours particuliers pour Salome" href="https://didelo.fr/Cours/cours_salome.html" target="_blank">Salom&eacute;</a>
          <a title="Ressources pour les cours particuliers" href="https://didelo.fr/Cours/ressource.html" target="_blank">Ressources</a> 
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Entrainement WEB
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a title="Entrainement au code en HTML et CSS" href="https://didelo.fr/Entrainement/entrainement.html" target="_blank">HTML et CSS</a>
          <a title="Entrainement au code en PHP et MyQSL" href="https://didelo.fr/Entrainement_php/entrainement_php.html" target="_blank">PHP et MyQSL</a>
          <a title="Entrainement au code en JavaScript" href="https://didelo.fr/Entrainement_js/entrainement_js.html" target="_blank">JavaScript</a>
          <a title="Tuto" href="https://didelo.fr/Tuto/tuto.php" target="_blank">Diff&eacute;rents tuto du site:</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Tests
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a title="Première page d'acceuil du site" href="https://didelo.fr/Test/ancien_index.html" target="_blank">Premi&egrave;re page d'acceuil</a>
          <a title="Seconde page d'acceuil du site" href="https://didelo.fr/Test/second_index.html" target="_blank">Seconde page d'acceuil</a>
          <a tilte="Différents Tests des pages du site" href="https://didelo.fr/Test/test.html" target="_blank">Tests</a>
          <a title="Test de la page d'acceuil" href="https://didelo.fr/Test/test_acceuil.html" target="_blank">Test de la page d'acceuil</a>
      </div>
    </div>
    <a title="Site de Noah SOLER" href="https://didelo.fr/Site-Noah/index.html" target="_blank">Soler NOAH</a>
    <a title="Curriculum Vitae de SOLER Lilian" href="https://didelo.fr/Media/Image/cv.pdf" target="_blank">CV</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
    }
    </script>
  </nav>
    
  <div class="icon-bar">
            <a href="https://www.facebook.com/lilian.soler.5" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/LilianSoler6" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/lilian64160/" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/soler-lilian-2aa832182/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCYA1jgZSSP9oISr1nkvIwHw?view_as=subscriber" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

    <div class='content' id="conteneur2">        
        <?php include("section_test.php"); ?>        
    </div>
    <div class='content' id='message'>
        <?php include("footer_test.php"); ?> 
    </div>
    
    <p  class='content' id="php"><?php include("ip_test.php"); ?></p>
    
    <script>
        setInterval('load_messages()',1500);
        function load_messages(){
            $('#message').load('footer_test.php');
        }
    </script>
</body>

</html>