<?php 

	$sen = "lorem ipsum dolor sit amet";
	$strArray = count_chars($sen,1);

	foreach ($strArray as $key=>$value){
		if (chr($key) == " ") {
			continue;
		}
		else{
   		echo chr($key)." -  " .$value . " <br> ";
   	}
   }


 ?>