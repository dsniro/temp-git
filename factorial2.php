<html>
<body bgcolor="#0066FF">
	<?php

	//Recursive solution of factorial.

	/*
	algorithm recursiveFactorial (val n <integer>)
	Calculates factorial of a number using recursion.

		Pre: 	n is the number being rased factorially
		Post: 	result is returned.

	1 if (n = 0)
	  1 return 1
	2 else
	  1 return ( n * recursiveFactorial (n -1) )
	end factorial
	*/

	function recursiveFactorial ($n) {
		if ($n = 0) {
			return 1;
		}
		else
			return ($n * recursiveFactorial($n-1));

	}

	// test: 5!
	// expected: 5! = 5*4*3*2*1  = 120

	echo recursiveFactorial(5);
	echo nl2br("\n");

	// something up with this program. Don't run it. Throws a memory error.


	?>
</body>
</html>
