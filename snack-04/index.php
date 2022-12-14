<?php 
/*
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$array = [];
for ( $i = 0; count($array) < 15; $i++ ) {
    $number = rand(1, 100);
    if( !in_array($number, $array)){
        $array[] = $number;
    }
};

foreach($array as $value){
    echo "<div>Numero: $value</div>";
};
?>