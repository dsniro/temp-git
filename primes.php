<html>
<body bgcolor="#0066FF">
	<?php

		// included a script to display the time of execution
		// Script start
		$rustart = getrusage();

		function checkPrime ($num) {
			if ($num == 1)
			return 1;
			for ($i=2; $i <= $num/2; $i++) {
				if ($num % $i == 0)
					return 0;
			}
			return 1;
		}

		$count = 5000;
		$inc = 2;

		while ($inc <= $count) {
			if (checkPrime($inc) == 0) {
				echo "Sorry, $inc is not Prime";
				echo nl2br("\n");
				$inc++;
			}
			elseif (checkPrime($inc) == 1) {
				echo "Why yes, $inc is prime!";
				echo nl2br("\n");
				$inc++;
			}
			else
				break;
		}

		echo nl2br("\n");
		echo "Done";
		echo nl2br("\n");


		// Script end
		function rutime($ru, $rus, $index) {
		    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
		     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
		}

		$ru = getrusage();
		echo "This process used " . rutime($ru, $rustart, "utime") .
		    " ms for its computations\n";
		echo nl2br("\n");
		echo "It spent " . rutime($ru, $rustart, "stime") .
		    " ms in system calls\n";

	?>
</body>
</html>
