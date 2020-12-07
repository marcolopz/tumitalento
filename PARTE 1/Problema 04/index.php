<?php

//obtener 3 comandos del usuario

// do{
    
//     $t = readline();
//     if(intval($t) >= 1 &&  intval($t) <= pow(10, 4)){
//         for ($i=0; $i < intval($t) ; $i++) { 
//             $values = readline();
//             list($m, $p) = explode(" ", $values);
//             echo " m = $m";
//             echo " p = $p";

//         }
//     }


// } while(intval($t) < 1 || intval($t)>10000);

fscanf(STDIN, "%d\n", $n);
$arr=array();
for($i=$n;$i>0;$i--){
	$arr[]=explode(' ',trim(fgets(STDIN)));
}
//$arr=array_reverse($arr);
var_dump($arr);
foreach($arr as $stone){
echo  count_one((int)((int)$stone[0] ^ (int)$stone[1])),PHP_EOL;
}
function count_one($n){
 	$count = 0;
	while($n){
		$n = $n & ($n - 1);
	    $count++;		
	}
	return $count;
}


