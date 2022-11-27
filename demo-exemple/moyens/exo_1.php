<?php ob_start();
require './function.php';
?>


<?php
$marie_array = array(
    "nom" => "Marie",
    "age" => 32,
    "sexe" => "Femme"
); 

$fifi_array = array(
    "nom" => "Fifi",
    "age" => 32,
    "sexe" => "Homme"
); 

$array_tab = [$marie_array, $fifi_array];




foreach( $array_tab as $value){
    affichage($value);
}
?>


<?php 
$content = ob_get_clean();
$title = "Exercice numéro 1";
require "../common/template.php";
?>
