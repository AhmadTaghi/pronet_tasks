<?php 

	$sentence = "Lore ipsum dolor sit amet";

	$values = "aıoueiöüAIOUEİÖÜ";

	$count = 0;

	for ($i=0; $i < strlen($sentence) ; $i++) { 
		if (strpos($values, $sentence[$i]) !== false ) {
			$count++;
		}
	}

	echo $count;

 ?>