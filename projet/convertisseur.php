<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de poids</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include("../php/script.php"); ?>
</head>

<body>
    <h2>Convertisseur de poids :</h2>
    <div class="form-group">
        <label>Grammes</label>
        <input id="grammes" type="number" placeholder="Grammes">
    </div>
    <div class="form-group">
        <label>Kilos</label>
        <input id="kilos" type="number" placeholder="Kilos">
    </div>
    <div class="form-group">
        <label>Livres</label>
        <input id="livres" type="number" placeholder="livres">
    </div>

    <script src="convertisseur.js"></script>
</body>

</html>