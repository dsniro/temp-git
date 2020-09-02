<?php
	// recursive power algorithm
	// p. 274 of Data Structures book

	// pseudocode:
	/*
	algorithm power (val base <integer>,
					val exp <integer>)
	This algorithm computes the value of a number, base, raised to
	the power of an exponent, exp.
		Pre:	base is the number to be raised
				exp is the exponent
		Post: 	value of base**exp computed
		Return: value of base**exp returned
		if (exp equal 0)
			return (1)
		else
			return (base * power (base, exp-1))
	end power
	*/

	// PHP solution:

	function power($base, $exp) {
		if ($exp==0) {
			return 1;
		}
		else {
			return ($base * power($base, $exp-1));
		}
	}

	// testing:
	print power(2, 10); // expect 1024
						// correct.

 ?>
