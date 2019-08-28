<?php 

	
	$array = array(100, 240, 152, 105, 56, 829, 596);
	$max = $array[0];
	$min = $array[0];

	foreach ($array as $key=>$value) {
    	if ($value > $max) {
        	$max = $value;
    	}
    	if ($value < $min) {
    		$min = $value;
    	}
	}

	echo "Maxumim value is = " . $max; echo "<br>";
	echo "Minimum value is = " . $min;

 ?>


