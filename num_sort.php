<?php

	// sorting numbers - ascending
	function numSort_A ($num) {
		$array  = array_map('intval', str_split($num));
		$temp = 0;
		$e = count($array);

		// looks like I need to implement a sort.
		// the inner for loop will do the swapping of each element.
		// the outer for loop will iterate through the length of the array
		for ($i=0; $i < $e; $i++) {
			for ($j=0; $j < $e; $j++) {
				if ($array[$i] < $array[$j]) {
					// swap logic:
					$temp = $array[$i];
					$array[$i] = $array[$j];
					$array[$j] = $temp;

					//echo "swap complete";
					//echo nl2br("\n");
				}
			}
		
			//echo "next for loop iteration";
			//echo nl2br("\n");
		}


		//var_dump($array);
		//print_r($array);
		//echo $array;
		return $array;
	}

	echo implode("", numSort_A(432581));

 ?>
