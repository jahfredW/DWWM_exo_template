<?php ob_start();
require '../function.php';
?>







<div class="container px-4 w-50">
    <form>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <label for="nombre">Nombre</babel>
                <input  id="nombre" name="nombre" type="text" class="p3 border text-center"></input>
            </div>
        </div>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <input name="-" value="-" type="button" class="p3 border text-center"></input>
            </div>
        </div>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <input name="*" value="*" type="button" class="p3 border text-center"></input>
            </div>
        </div>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <input name="/" value="/" type="button" class="p3 border text-center"></input>
            </div>
        </div>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <input name="+" value="+" type="button" class="p3 border text-center"></input>
            </div>
        </div>
        <div class="row gx-2 pb-3 text-center">
            <div class="col-3">
                <input name="submit" value="=" type="submit" class="p3 border text-center" onclick="recup()"></input>
            </div>
        </div>
    </form>
</div>

<?php 

$save = 0;

function recup(){
    global $save;
    if (isset($_GET['+'])){
        $save += intval($_GET['nombre']);
    }
    
   
    return $save;
}


$save = recup();
echo $save;

?>



    

<?php 
$content = ob_get_clean();
$title = "Ma super calculatrice";
require "../common/template.php";
?>
