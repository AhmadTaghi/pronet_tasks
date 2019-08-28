<?php 


	$sentence = "ahmad taghi";

	function expSen($sentence){
		
		$a = 0 ;

		for ($i=0; $i < strlen($sentence) ; $i++) { 

			if ($sentence[$i] == " ") {

				for ($j=$a; $j <= $i ; $j++) { 
					$a = $i;
					echo $sentence[$j];
				}
			echo "<br>";
			}

		}

		for ($k=$a; $k < strlen($sentence) ; $k++) { 
			echo $sentence[$k];
		}
	}

	expSen($sentence);

	
	



	


 ?>