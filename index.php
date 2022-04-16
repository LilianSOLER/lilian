<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Site de Lilian Soler</title>
	<?php require_once 'php/meta-info.php'; ?>
	<link rel="stylesheet" href="./css/theme.css" />
</head>

<body>
	<div class="app">
		<?php require_once 'php/header.php'; ?>
		<div class="text-center">
			<router-view></router-view>
		</div>
	</div>
	<?php require_once 'php/sidebar.php'; ?>
	<?php require_once 'php/import-css.php'; ?>
	<?php require_once 'php/script-js.php'; ?>
	<?php require_once 'php/script-vue.php'; ?>

	<?php // require_once 'php/pub-leader-board.php'; 
	?>
	<?php // require_once 'php/tawk-to-script.php'; 
	?>
	<?php // require_once 'php/google-analytics.php'; 
	?>
</body>

</html>