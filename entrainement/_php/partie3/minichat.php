<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/_index.css">
    <title>Mini-chat</title>
    <?php include("../../../php/script.php"); ?>
</head>
<style>
    form {
        text-align: center;
    }
</style>

<body>

    <?php include("../../../php/header.php"); ?>

    <div id="conteneur2">
        <?php include("../../../php/menu.php"); ?>
        <section id="section1">
            <div class="bloc_2">
                <article id="article1">

                    <p id="php"><?php include("../../../php/ip.php"); ?></p>


                    <form action="minichat_post.php" method="post">
                        <p>
                            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
                            <label for="message">Message</label> : <input type="text" name="message" id="message" /><br />
                            <input type="submit" value="Envoyer" />

                        </p>
                    </form>

                    <div id='message'>
                        <?php
                        // Connexion à la base de données
                        $bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]');
                        // Récupération des 25 derniers messages
                        $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 25');

                        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                        while ($donnees = $reponse->fetch()) {
                            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . ' le ' . $donnees['date'] . '</p>';
                        }
                        ?>
                    </div>
            </div>
            </article>
    </div>
    </section>

    </div>

    <?php include("../../../php/footer.php"); ?>

    <script>
        setInterval('load_message()', 1000);

        function load_message() {
            $('#message').load('mini_chat_bdd.php');
        }
    </script>
</body>

</html>