<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function multable(){
	for($i = 1; $i <=10; $i++){
		for($j=1; $j<=10;$j++){
			echo "$i <br> $j";		
		}	
	}
	
}

echo multable();

?>
