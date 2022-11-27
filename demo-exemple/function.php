<?php 

function affichage($array){
    echo ' ----------';
    echo '<br>';
    foreach( $array as $key => $value ){
        echo $key . " : " . $value ;
        echo '<br>';
    }
    echo '<br>';
}

function build_array(){
    $array = array();
    for($index = 0; $index < 10; $index ++){
        array_push($array, random_int(1, 10));
    }
    return $array;
}

// Récupération des variables GET
// $tabUrl = parse_url ( $_SERVER [ 'REQUEST_URI' ] ) ;
// $listparam = explode ( "&" , $tabUrl [ 'query' ] ) ;
// $nb_param = count ( $listparam ) ;

// // on associe les valeurs 
// for ( $i=0 ; $i<$nb_param ; $i++)  {
//   $param = explode ( '=' , $listparam[$i] ) ;
//   $paramname = $param[0];
//   $paramvalue = $param[1];
//   $$paramname = $paramvalue;
// }


// // Récupération des variables POST
// foreach ( $_POST as $post => $val )  {            
//     $$post = $val;
// }


// // affichage d'une variable post ou get
// echo $mavariable ;

?>