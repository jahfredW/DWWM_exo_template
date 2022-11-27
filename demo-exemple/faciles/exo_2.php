<?php ob_start(); ?>

<?php


// Récupération des variables GET
$tabUrl = parse_url ( $_SERVER [ 'REQUEST_URI' ] ) ;
$listparam = explode ( "&" , $tabUrl [ 'query' ] ) ;
$nb_param = count ( $listparam ) ;
print_r($tabUrl);
print_r($listparam);

// on associe les valeurs 
for ( $i=0 ; $i<$nb_param ; $i++)  {
  $param = explode ( '=' , $listparam[$i] ) ;
  $paramname = $param[0];
  echo $paramname;
  $paramvalue = $param[1];
  echo $paramvalue;
  $$paramname = $paramvalue;
}




// Récupération des variables POST
foreach ( $_POST as $post => $val )  {            
    $$post = $val;
}


// affichage d'une variable post ou get

?>

<form>
    <fieldset>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input id="nom" name="nom" type="text">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input id="prenom" name="prenom" type="text">
        </div>
        <div class="form-group">
            <label for="resultat">Resultat</label>
            <input id="resultat" name="resultat" type="text">
        </div>
        <div class="form-group text-center">
            <button type="submit" name="submit">Go ! </button>
        </div>
        
    </fieldset>
</form>


<?php 
$content = ob_get_clean();
$titre = "exercice_2";
require "../common/template.php";
 ?>