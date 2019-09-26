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



<?php
echo "La structure de base : if… else";
echo "<br>";
?>


<?php
$age = 8;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
echo "Avez-vous l'autorisation d'entrer ? La réponse est :  $autorisation_entrer ";
echo "<br>";
echo "Avez-vous l'autorisation d'entrer ? La réponse est : " . $autorisation_entrer ;
echo "<br>";
echo 'Avez-vous l\'autorisation d\'entrer ? La réponse est : ' . $autorisation_entrer ;
?>



<?php

echo "<br>";
//$autorisation_entrer = "Non";

if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
    echo "Euh, je  connais  ton âge, tu peux me le rappeler s'il te plaît ?";
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
?>

<?php
 static $autorisation_entrer = true;

if ($autorisation_entrer)
{
    echo "Bienvenue petit nouveau. :o)";
}
else
{
    echo "T'as pas le droit d'entrer !";
}
?>