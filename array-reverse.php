<html>
<body bgcolor="#0066FF">
	<?php

		# array reverse:
		# reverse the array without using the array_reverse(array)
		# built-in method.


	function a_rev($num)
	{
		print "Original array is: ";
		echo implode(", ", $num);
		$c = count($num);		// $c = 6. to be used to count from the end.
		$temp = 0;
		$b = 0;					// "base" number of the array for counting at the beginning

		while ($c > 0) {
			if ($b==$c) {
				// this only works if the number of elements is even.
				// if odd, we need to add another OR statement to that comparisson.
				print "The reversed array is: ";
				return $num;
			}
			else {
				$temp = $num[$c-1];
				$num[$c-1] = $num[$b];
				$num[$b] = $temp;
				$c--;
				$b++;
				echo nl2br("\n");
			}
		}
		echo nl2br("\n");
	}

	print_r(a_rev([99, 87, 76, 65, 54, 43, 32, 21, 10, 9, 7, 3, 1, 0]));

	?>
</body>
</html>
