<?php
function Print_I($num){
	for ($i=1; $i<$num/3 ; $i++) { 
		echo "*";
	}	echo "</br>";
for ($i=1; $i<=$num ; $i++) {
for ($j=1; $j<=$num ; $j++) { 
 	if ($j==2) {
 	echo "*";
 	}else{
 		echo "&nbsp ";
 	}
 } 
	
	echo "</br>";
}
for ($i=1; $i<$num/3 ; $i++) { 
		echo "*";
	}
}
Print_I(10);
?>