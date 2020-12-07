<?php

class Rango {
    public function construir($array) {
        sort($array);
        $resultado = array();
        $tamaño = count($array);
        for ($i = 0; $i < $tamaño ; $i++) { 
            array_push($resultado, $array[$i]);
            if($i !== $tamaño -1){
                if($array[$i]+1 != $array[$i+1]){
                    for ($j = $array[$i]+1; $j < $array[$i+1]; $j++) { 
                        array_push($resultado, $j);
                    }
                }
            }
        }
        return $resultado;
    }
}
// pruebas
$a = [52, 58, 60];
$rango = new Rango();
$resultado = $rango->construir($a);
print_r($resultado);