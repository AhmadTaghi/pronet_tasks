<?php

	$A = array(54,5,9,7,3,542,19,64);

	function sorting($ArrayA){
		for ($i = 0; $i < count($ArrayA); $i++) { 
 
            $value = $ArrayA[$i]; 
            $temp = $i; 
 
            for ($j = $i+1; $j < count($ArrayA) ; $j++) { 
                if($ArrayA[$j]<$value){ 
                    $value = $ArrayA[$j]; 
                    $temp = $j; 
                }
            }
 
            if($temp != $i){ 
                $ArrayA[$temp] = $ArrayA[$i];
                $ArrayA[$i] = $value;
            }
 
        }

        foreach ($ArrayA as $key => $value) {
        	echo $value . "<br>";
        }
	}

	sorting($A);

	


?>