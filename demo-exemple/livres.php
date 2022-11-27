<?php ob_start() ?>

<h1>Ici c'est la page des livres</h1>
<div>
  


<?php 
$content = ob_get_clean();
require "template.php";
?>