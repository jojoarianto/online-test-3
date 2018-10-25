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
	$sum = 0; // current sum (total tanpa nilai yang hilang)

	$size = count($A);
	$n = $size+1;	
	
	// menggunakan for (tidak efisien)
	$sum_harapan = 0;
	for ($i=0; $i < ($n); $i++) { 
		$sum_harapan = ( $i+1 ) + $sum_harapan;

		if ($i < ($size)) {
			$sum+=$A[$i];
		}
	}

	echo "Angka yang hilang = " . ($sum_harapan - $sum);
}

$a = array(5, 1, 2, 4);
solution($a);