<?php

function subSets($arr, $sum){
	$n = count($arr);
	$yes = false;
	if ($n == 1) {
		if($arr[0] == $sum){
			$yes = true;
		}
	}	
	for ($i=0; $i < (1<<$n) ; $i++) { 
		$subSet = array();
		for ($j=0; $j < $n; $j++) { 
			if(($i & (1<<$j)) > 0)
				array_push($subSet, $arr[$j]);
		}
		if($sum == array_sum($subSet)){
			$yes = true;
			break;
		}
	}
	echo $yes ? "SI" : "NO";
}
$t = intval(readline());
while ($t-- >=1 && $t<=10) {
	do{
		$n = intval(readline());
	}while($n <1 || $n > 15);
	$m = explode(' ', rtrim(readline()));
	$s = intval(readline());
	subSets($m, $s);
}