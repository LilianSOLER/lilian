<!doctype html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz en JavaScript</title>
  <link rel="stylesheet" type="text/css" href="quizz_js.css">
  <?php include("../../php/script.php"); ?>
</head>

<body>
  <!--Contenu-->
  <div class="container">
    <div id="quiz">
      <h1><span>Q</span>uiz</h1>

      <h2 id="question"></h2>

      <h3 id="score"></h3>

      <div class="choices">
        <button id="guess0" class="btn">
          <p id="choice0"></p>
        </button>

        <button id="guess1" class="btn">
          <p id="choice1"></p>
        </button>

        <button id="guess2" class="btn">
          <p id="choice2"></p>
        </button>

        <button id="guess3" class="btn">
          <p id="choice3"></p>
        </button>
      </div>

      <p id="progress"></p>

    </div>
  </div>


  <script type="text/javascript" src='quizz_js.js'></script>

  <!-- 728x90_btf  Leader board-->
  <ins data-zone="234867" class="byadthink"></ins>
  <script type="text/javascript" async src="//ad.adxcore.com/adjs_r.php?async&what=zone:234867&inf=no"></script>


</body>

</html>