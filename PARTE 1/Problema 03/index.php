<?php

$t = intval(fgets(STDIN));
while ($t--) {
	$n = intval(fgets(STDIN));
	$m = explode(' ', rtrim(fgets(STDIN)));
	$total = array_sum($m);
	$s = intval(fgets(STDIN));
	if ($n == 1) {
		echo $m[0] == $s ? "YES\n" : "NO\n";
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
	echo $yes ? "YES\n" : "NO\n";
}
$j = 3;
$J>>=1;
echo $j;