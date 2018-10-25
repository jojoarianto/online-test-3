<?php 

/**
 * n = 6
 *
 * sum_harapan = 1+2+3+4+5+x
 * 
 * [1,2,3,4,5,x] - case 1
 * [x,2,3,4,5,6] - case 2
 * [3,4,5,1,x,3] - case 3
 *
 * find x
 */

function solution($A)
{
	$sum = 0;

	$size = count($A);
	for ($i=0; $i < $size; $i++) { 
		$sum+=$A[$i];
	}
	
	$n = $size+1;
	$sum_harapan = ($n/2) * (2 + ($n - 1));

	echo "Angka yang hilang = " . ($sum_harapan - $sum);
}

$a = array(1, 5, 2, 4);
solution($a);