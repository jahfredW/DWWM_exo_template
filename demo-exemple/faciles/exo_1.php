<?php ob_start() ?>


<?php

$number = 0;
if (isset($_GET['submit'])){
    $number = intval($_GET['number']);
}

?>

<form>
    <div class="text-center mt-4">
    <legend>Entrez un nombre pour obtenir son carré</legend>
    </div>

    
    
    <div class="form-group">
      <label for="number" class="form-label mt-4">Nombre :</label>
      <input name="number" type="text" class="form-control" id="number" placeholder="Entrez un nombre">
      <small id="emailHelp" class="form-text text-muted">Faites vous plaisir.</small>
    </div>
    <div class="form-group">
      <label for="resultat" class="form-label mt-4">Resultat</label>
      <input type="text" class="form-control" id="resultat" placeholder="Resultat" 
      value="<?php if ($number != 0){
        echo $number * $number;
      } else {
        echo " ";
      }; ?>">
    </div>
    <div class="form-group text-center">
        <button type="submit" name="submit" class="btn btn-primary btn-lg mt-5" >
            GO !
        </button>
    </div>
</form>



<?php 
$content = ob_get_clean();
$title = "Exercice numéro 1";
require "../common/template.php";
?>

