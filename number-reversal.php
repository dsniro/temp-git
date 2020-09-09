<?php

	// to be used in the inputs project

	// taking a number, converting it to a string, then reversing it.

	function numRev($num) {
		$toRev = (string) $num; 	// convert the integer to a string
		$Rev = array();				// initializing the eventual array of reversed elements
		$len = strlen($toRev);		// the length of the string of $num

		for ($i=$len -1; $i >= 0; $i--) {	// decrementing (reversing) for loop
			$Rev[] = $toRev[$i];			// assign each reversed element to the new $Rev array
		}
		return $Rev;				// the outupt array, $num reversed. string array format.
	}

	echo implode("", numRev(5024));		// output the reversed string as a "number"

 ?>
