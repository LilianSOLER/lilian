<?php
function csvToArray($file){
  $lines = file($file);
  $array = array();
  foreach ($lines as $line_num => $line) {
    $line = trim($line);
    $array[$line_num] = str_getcsv($line, ",");
  }
  return $array;
}

function display_table($array) {
    echo "<table>";
  foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $col) {
      echo "<td>$col</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}

//test si le mot de passe est dans l'array en comparant le 4ème élément de l'array avec le mot de passe saisi
function check_password($array, $password) {
  if (count($array) > 3) {
    if ($array[3] == $password) {
      return true;
    }
  }
  return false;
}

//test toute les fonctions
function test_functions() {
  $array = csvToArray("test.csv");
  $password = $_POST['password'];
  if (check_password($array, $password)) {
    echo "Mot de passe correct";
  } else {
    echo "Mot de passe incorrect";
  }
}

//affiche les n premier nombre premier

