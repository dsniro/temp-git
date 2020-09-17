<?php

	// edabit question to check an array against a value to see
	// if it is greater than or equal to that value.

	function hurdleJump ($hurdles, $jumpHeight) {
		$arr = $hurdles;
		$j = $jumpHeight;

		//var_dump($arr);
		//var_dump($j);

		for ($i=0; $i < count($arr) ; $i++) {
			if ($arr[$i] > $j) {
				echo "too high!";
				return false;
			}
		}
		echo "made the hurdle!";
		return true;
	}

	hurdleJump([1, 2, 3, 4], 5);

 ?>


