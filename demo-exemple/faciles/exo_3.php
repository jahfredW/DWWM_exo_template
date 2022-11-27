<?php ob_start(); ?>

<?php 

function modulo($number){
$pair = false;

$pair = $number % 2 === 0 ? "pair" : "impair";
return $pair;
}

if(isset($_POST['submit'])){
    $resultat = modulo($_POST['nombre']);
}



?>

<form method="post">
    <div>
        <label for="nombre">Nombre : </label>
        <input id="nombre" name="nombre" type="text">
    </div>
    <div>
        <label for="result">Résultat</label>
        <input id="result" name="result" value="<?= (isset($_POST['submit'])) ? $resultat : " "; ?>" type="text">
    </div>
    <div>
        <button type="submit" name="submit"> Go!</button>
    </div>

</form>



<?php 

$content = ob_get_clean();
$title = "exercice 3";
require "../common/template.php";
?>