<?php ob_start(); ?>

<?php 

function presentation($pseudo, $age){

    echo "<div class='text-center'>";
    echo "Pseudo : " . $pseudo . "<br>";
    echo "Age : " .$age;
    echo "</div";

}


?>

<form method="get">
    <div>
        <label for="pseudo">PSEUDO </label>
        <input id="pseudo" name="pseudo" type="text">
    </div>
    <div>
        <label for="age">AGE</label>
        <input id="age" name="age" type="text">
    </div>
    <div>
        <button type="submit" name="submit"> Go!</button>
    </div>

</form>

<?php 

if(isset($_GET['submit'])){
    presentation($_GET['pseudo'],  $_GET['age']);
}
?>

<?php 

$content = ob_get_clean();
$title = "exercice 4";
require "../common/template.php";
?>