<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/theme.css">
  <title> Formulaire envoyé </title>
</head>

<body>
  <p>Bonjour !</p>

  <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <strong><?php echo htmlspecialchars($_POST['prenom']); ?> </strong> !</p>

  <p>Si tu veux changer de prénom, <a href="formulaire_nom.php">clique ici</a> pour revenir à la page formulaire.php.</p>
</body>

</html>