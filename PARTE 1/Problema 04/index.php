<?php

$n = intval(readline());
$arr=array();
for($i=$n;$i>0;$i--){
	$arr[]=explode(' ',trim(readline()));
}
foreach($arr as $stone) {
	echo  count_one((int)((int)$stone[0] ^ (int)$stone[1])),PHP_EOL;
}
function count_one($n) {
 	$count = 0;
	while($n){
		$n = $n & ($n - 1);
	    $count++;		
	}
	return $count;
}