<?php
//ini_set('default_charset', 'utf-8');
class Cadena {
    
    public function construir(string $cadena) {
        
        $resultado = "";
        $letras = mb_str_split($cadena);
        foreach($letras as $clave=>$valor) {
           $resultado .= $this->siguiente($valor);
        }
        return $resultado;
    }
    function siguiente($caracter){
        
        if(ctype_alpha($caracter)){
            if($caracter === "z" || $caracter === "Z"){
                return ctype_lower($caracter)? "a":"A";
            } else if($caracter === "n" || $caracter === "N") {
                return ctype_lower($caracter)? "ñ":"Ñ";
            }
            return ++$caracter;
        } else {
            $codigo = mb_ord($caracter);
            if($codigo == 241){
                return "o";
            }else if($codigo === 209){
                return "O";
            }else {
                return $caracter;
            }
        }
        
    }
    
}
// Pruebas
$cadena = new Cadena();
$resultado = $cadena->construir("765z abcd*99");
echo "Resultado : " . $resultado;
echo "\n";
$resultado = $cadena->construir("--Casanñ &%$#");
echo "Resultado : " . $resultado;
echo "\n";
$resultado = $cadena->construir("**FLht 98Z");
echo "Resultado : " . $resultado;
echo "\n";
$a ="NanñzÑZ";
$resultado = $cadena->construir($a);
echo "Resultado : " . $resultado;
