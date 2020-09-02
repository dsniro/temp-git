<html>
<body bgcolor="#0066FF">

	<?php

	// my solution for the String implementation of palindrome problem from edabit.

	function checkPal($n) {
		$s = strval($n);
		$c = strlen($s);
		$b = 0;
		$e = $c-1;

		while ($e > 0) {
			if ($s[$b] == $s[$e])
				{
					// if correct:
					$b++;
					$e--;

					if ($e < $b)
						{
							return true; // true = 1;
						}
				}
			else {
				echo "nope!";
				return false;
			}
			}

		}

	echo nl2br("\n");
	echo checkPal(443344);

	echo nl2br("\n");
	echo checkPal(838);


	echo nl2br("\n");
	echo checkPal(77);


	echo nl2br("\n");
	echo checkPal(95159);

	echo nl2br("\n");
	echo checkPal(839);

	echo nl2br("\n");
	echo checkPal(4234);
	echo nl2br("\n");
	echo checkPal(13);


	 ?>
</body>
</html>
