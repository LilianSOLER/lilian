<!doctype html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours particuliers pour Kevin</title>
  <link rel="stylesheet" type="text/css" href="css/_index.css">
  <link rel="stylesheet" type="text/css" href="css/cours.css">
  <link rel="stylesheet" type="text/css" href="css/grid_cours_kevin.css">
  <?php include("../../../../php/script.php"); ?>
</head>

<body>
  <div class='tout'>
    <?php include("../../../../php/newHeader.php"); ?>
    <div class="html" id="app">
      <h1> Kevin </h1>
      <ul class="parent">
        <div v-for="month in cours">
          <li>{{ month.name }}</li>
          <ul>
            <li v-for="lesson in month.lessons">
              <a :href="lesson.link">{{ lesson.day }} - {{ lesson.title }}</a>
            </li>
          </ul>
        </div>
        <div>
          <li>Utilitaires:</li>
          <ul>
            <div v-for="util in utils">
              <li>
                <a :href="util.link">{{ util.title }}</a>
              </li>
            </div>
          </ul>
        </div>
      </ul>
    </div>

    <?php include("../../../../php/newSocial.php"); ?>
    <?php include("../../../../php/script_bottom.php"); ?>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="./app.js"></script>
  </div>
</body>

</html>