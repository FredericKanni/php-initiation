<?php
$age_du_visiteur = 17; // La variable est créée et vaut 17
$age_du_visiteur = 23; // La variable est modifiée et vaut 23
$age_du_visiteur = 55; // La variable est modifiée et vaut 55
echo $age_du_visiteur;
?>


<?php
$nom_du_visiteur = "Mateo21";
$nom_du_visiteur = 'Mateo21';
echo $nom_du_visiteur;
?>

<?php
$variable = 'Mon "nom" est Mateo21';
$variable = "Je m'appelle Mateo21";
echo $variable;
?>

<?php
$age_du_visiteur = 17;
echo $age_du_visiteur;
?>

<?php
$poids = 57.3;
echo $poids;
?>

<?php
echo "concatenation";
echo "<br>";
$age_du_visiteur = 17;
echo "Le visiteur a ";
echo $age_du_visiteur;
echo " ans";
?>



<?php
$nombre = 2 + 4; // $nombre prend la valeur 6
echo $nombre;
echo "<br>";
$nombre = 5 - 1; // $nombre prend la valeur 4
echo $nombre;
echo "<br>";
$nombre = 3 * 5; // $nombre prend la valeur 15
echo $nombre;
echo "<br>";
$nombre = 10 / 2; // $nombre prend la valeur 5
echo $nombre;
echo "<br>";

// Allez on rajoute un peu de difficulté
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
echo $nombre;
echo "<br>";
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
echo $nombre;
echo "<br>";
?>


<?php
echo "modulo";
echo "<br>";

$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
echo $nombre;
echo "<br>";
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
echo $nombre;
echo "<br>";
?>
