<header>
  <div class="header">
    <a href="index.php" class="logo">SOLER Lilian</a>
    <div class="header-right">
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Accueil</a>
        <div class="dropdown">
          <button class="dropbtn">Correction PEIP 2
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a title="Arduino: Programmes Divers et Corrections des TD" href="peip2/arduino/">Arduino</a>
            <a title="Introduction au Web (HTML et CSS) : Correcttions des TD" href="peip2/web/">Intro au Web</a>
            <a title="Applications du Web (PHP et JS) : Correcttions des TD" href="peip2/applicationWeb/">Applications du Web</a>
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
            <a title="Cours particuliers pour Amandine" href="cours/cours_amandine.php">Amandine</a>
            <a title="Cours particuliers pour Salome" href="cours/cours_salome.php">Salom&eacute;</a>
            <a title="Cours particuliers pour Slimane" href="cours/cours_slimane.php">Slimane</a>
            <a title="Ressources pour les cours particuliers" href="cours/ressource.php">Ressources</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Entrainement WEB
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a title="Entrainement au code en HTML et CSS" href="entrainement/_html/">HTML et CSS</a>
            <a title="Entrainement au code CSS et ses animations" href="entrainement/_css/">Animation CSS</a>
            <a title="Entrainement au code en PHP et MyQSL" href="entrainement/_php/">PHP et MyQSL</a>
            <a title="Entrainement au code en PHP orienté objet" href="entrainement/_php_poo">PHP orienté objet</a>
            <a title="Entrainement au code en JavaScript" href="entrainement/_js/">JavaScript</a>
            <a title="Entrainement au Framework Bootstrap" href="entrainement/_bootstrap/">Bootstrap</a>
            <a title="Différents projets d'entraînement" href="projet/">Diff&eacute;rents projets d'entraînement</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Mes infos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a title="Curriculum Vitae  long de SOLER Lilian" href="media/image/cv.pdf">CV long </a>
            <a title="Curriculum Vitae court de SOLER Lilian" href="https://liliansoler.didelo.fr">CV court</a>
          </div>
        </div>
        <!-- <a title="Site d'Elisa Roux'" href="https://elisaroux.didelo.fr">Elisa ROUX</a> -->
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
    </div>
  </div>
</header>