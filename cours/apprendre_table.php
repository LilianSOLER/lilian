<?php

if(isset($_GET['op'])){
  $op = $_GET['op'];
}else{
  $op = 0;
}

$ops = [["Addition", "+"], ["Soustraction", "-"], ["Multiplication", "x"], ["Division", "/"]];
$op_string = $ops[$op][0];
$op_symbol = $ops[$op][1];

function table($N, $op, $op_symbol)
{
  
	$res = "<table>";
	for ($i = 1; $i <= $N; $i++) {
		$res .= "<tr>";
		for ($j = 1; $j <= $N; $j++) {
      switch ($op) {
        case 0:
          $result = $i + $j;
          break;
        case 1:
          $result = $i - $j;
          break;
        case 2:
          $result = $i * $j;
          break;
        default:
          $result = $i + $j;
          break;
      }
				$res .= "<td><strong>$i</strong> $op_symbol $j = $result</td>";
		}
		$res .= "</tr>";
	}
	$res .= "</table>";
	return $res;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Différentes Tables</title>
	<meta name="author" content="SOLER Lilian">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link rel="stylesheet" href="css/apprendre_table.css">
</head>

<body>
	<h1>Table <?php echo $op_string;?></h1>
	<hr>
	<?php
	$N = 12;
  echo table($N, $op, $op_symbol);
	?>
</body>

</html>