<?php
//function for finding factirial using recursive function

function factorial ($number) {
	
	if ($number == 0) {
		return 1;
	}
		
		return $number*factorial($number-1);
	
}

echo factorial(4);