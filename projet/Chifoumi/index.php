<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Feuille Pince</title>
    <link rel="stylesheet" type="text/css" href="../css/_index.css">
    <?php include("../../php/script.php"); ?>
    <style>
        #puit {
            color: transparent;
            background-color: transparent;
            border: none;
            outline: none;
        }

        .html {
            border: none;
            font-size: 25px;
            text-align: center
        }
    </style>
</head>

<body>
    <div class='tout'>
        <?php include("../../php/newHeader.php"); ?>
        <div class="html">
            <br /><br /><br /><br />
            <button class='jeu'>Pierre</button>
            <button class='jeu'>Feuille</button>
            <button class='jeu'>Pince</button><br />
            <button class='jeu' id='puit'>Puit</button><br />
            <div class="resultat"></div>
        </div>
        <?php include("../../php/newSocial.php"); ?>
    </div>
    <script>
        const buttonsDiv = document.querySelectorAll('button.jeu');
        console.log(buttonsDiv);
        for (let i = 0; i < buttonsDiv.length; i++) {
            buttonsDiv[i].addEventListener('click', function() {
                const joueur = buttonsDiv[i].innerHTML; //renvoie ce qu'est écrit dans le bouton du joueur
                const robot = buttonsDiv[Math.floor(Math.random() * buttonsDiv.length)].innerHTML; //nombre au hasard entre 0 et 1 fois le nombre de boutons puis arrondie
                let resultat = "";

                if (joueur === robot) {
                    resultat = 'Egalité';
                } else if ((joueur === 'Pierre' && robot === 'Pince') || (joueur === 'Feuille' && robot === 'Pierre') || (joueur === 'Pince' && robot === 'Feuille') || (joueur === 'Feuille' && robot === 'Puit')) {
                    resultat = 'Gagné';
                } else if ((joueur === 'Puit' && (robot === 'Pierre' || robot === 'Pince'))) {
                    resultat = 'Gagné avec la technque secrète';
                } else {
                    resultat = 'Perdu';
                }
                console.log(resultat);
                document.querySelector('.resultat').innerHTML = `Joueur : ${joueur} </br> Robot : ${robot} </br> ${resultat} !`;
            });

        }
    </script>
</body>

</html>