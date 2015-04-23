<?php
   // Displays narcissistic/armstrong numbers between 1 and 1000
   // Author: John Waweru
   // Website: www.johnwaweru.com
   // Email: john@johnwaweru.com

	for($i =1; $i <= 100000; $i++) {
		$n = $i;
		$sum = 0;
		
		while($n != 0) {
			$r = $n%10; // Extract the last digit
			$sum = $sum + pow($r, strlen($i));
			$n = $n/10; // Reduce number by 1
		}
		
		if($sum == $i) {
			echo $i . "<br />";
		}
	}
   
?>