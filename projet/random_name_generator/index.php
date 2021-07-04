<!doctype html>
<html lang="fr">

<head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Générateur de noms aléatoires</title>
        <link rel="stylesheet" type="text/css" href="../css/_index.css">
        <link rel="stylesheet" type="text/css" href="random_name_generator.css">
        <?php include("../../php/script.php"); ?>
        <?php
        $bdd = mysqli_connect('localhost', 'didelofr_liliansoler', 'JiORPQLGq.Nk', 'didelofr_test');
        $random_req = "SELECT name FROM `random_name` ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($bdd, $random_req);
        if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                        $random_name = $row["name"];
                }
        }
        mysqli_close($bdd);
        ?>

</head>

<body>
        <div id="container">
                <h1>Générateur de noms aléatoires</h1>
                <h2 id="random_name"><?php if (!empty($random_name)) {
                                                echo $random_name;
                                        } ?></h2>
                <div>
                        <form action="random_name_generator.php"><input type="submit" value="Generate"></form>
                </div>
        </div>
</body>

</html>