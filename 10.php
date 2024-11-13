<?php
    	$num = (int) $_POST['num'];
    	$sum = 0;
		for ($i = 2; $i < $num; $i++) {
		        $isPrime = true; 
        		for ($j = 2; $j <= sqrt($i); $j++) {
        		    if ($i % $j == 0) {
        		        $isPrime = false; 
        		        break;
        		    }
        		}
        	if ($isPrime) {
        	    $sum += $i;
        	}
        }
	echo "The sum of prime numbers less than $num is: $sum";
?>

