<?php

function esReflejo($num){
    $arr = str_split($num);
    $arr_reverse = array_reverse($arr);
    $validator = array( 1 => 1, 2 => 5, 5 => 2, 8 => 8);
    foreach ($arr as $key => $value) {
        if(!array_key_exists($value,$validator)){
            return false;
        }else if($arr_reverse[$key] != $validator[$value]){
            return false;
        }
    }
    return true;
}
function contar($m,$n){
    $rango = range($m, $n);
    $contador = 0;
    foreach ($rango as $key => $value) {
        if(esReflejo($value)){
            $contador++;
        }
    }
    return $contador;
}
$values = readline();
list($m, $n) = explode(" ", rtrim($values));
echo contar($m,$n);
