<?php

function isPrimeNumber(int $n)
{
    $i = 2;
    while (($i * $i <= $n) && ($n % $i != 0)) {
    	$i++;
    }
    if ($i * $i > $n) {
		echo "Да";
	} else {
		echo "Нет";
	}
}
