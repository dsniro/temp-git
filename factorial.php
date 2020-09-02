<html>
<body bgcolor="#0066FF">
	<?php

	/*
	Here's something different. This is from page 271 of the DS book:
	Data Structures: A pseudocode approach with C.

	Iterative solution of factorial.

	algorithm iterativeFactorial (val n <integer> )
	Calculates the factorial of a number using a loop.
		Pre: 		n is the number to be raised factorially
		Return: 	n! is returned

	1 i = 1
	2 factN = 1
	3 loop (i <= n)
	  1 factN = factN * i
	  2 i = i + 1
	4 return factN ;
	end iterativeFactorial

	let's try it in PHP!
	*/

	function iterativeFactorial ($n) {
		$i = 1;
		$factN = 1;
		while ($i <= $n) {
			$factN *= $i;
			$i++;
		}
		return $factN;
	}

	// test: 5!
	// expected: 5! = 5*4*3*2*1  = 120

	echo iterativeFactorial(5);
	echo nl2br("\n");


	?>
</body>
</html>
