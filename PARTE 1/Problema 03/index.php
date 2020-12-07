<?php

$t = intval(readline());
while ($t-- >=1 && $t<=10) {
	do{
		$n = intval(readline());
	}while($n <1 || $n > 15);
	
	$m = explode(' ', rtrim(readline()));
	$total = array_sum($m);
	$s = intval(readline());
	if ($n == 1) {
		echo $m[0] == $s ? "SI\n" : "NO\n";
		continue;
	}
	$yes = false;
	for ($i = 0; $i < 1<<($n-1); $i++) {
		$sum = 0;
		$j = $i;
		$k = 0;
		while ($j) {
			if ($j&1) {
				$sum += $m[$k];
			}
			$k++;
			$j>>=1;
		}
		if ($sum == $s || $total - $sum == $s) {
			$yes = true;
			break;
		}
	}
	echo $yes ? "SI\n" : "NO\n";
}
