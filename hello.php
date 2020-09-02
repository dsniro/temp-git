<html>
	<body bgcolor="#0066FF">
	  <form method="POST" action="hello.php">
	  	Your Name: <input type="text" name="user" />
	  	<br/>
	  	<button type="submit">Say Hello</button>
	  </form>
				<?php
				print "Hello, ";
				// Print what was submitted in the form parameter called 'user'
				print $_POST['user'];
				print "!";
				?>

			<p>
				<!-- -->
			</p>
	</body>
</html>
