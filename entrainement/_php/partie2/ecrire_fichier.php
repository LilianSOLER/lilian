<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'a+');

// 2 : on fera ici nos opérations sur le fichier...

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>
<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'a+');
 
// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>

<?php fputs($monfichier, 'Texte à écrire'); ?>

<?php
$monfichier = fopen('compteur.txt', 'a+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>