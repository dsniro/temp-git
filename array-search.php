<html>
<body bgcolor="#0066FF">
	<?php

$arr = array(100,40,1,455,17,50,4);
$max = $arr[0];

foreach($arr as $key => $val){
    if($max < $val){
        $max = $val;
    }
}

print $max;

echo nl2br("\n");

	## similarly, for min:

$arr = array(100,40,1,5,17,50,4);
$min = $arr[0];

foreach($arr as $key => $val){
    if($min > $val){
        $min = $val;
    }
}

print $min;

	?>
</body>
</html>
