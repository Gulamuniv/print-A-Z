<?php
function Print_Y($num){
for ($i=1; $i<=$num ; $i++) { 
	for ($j=1; $j<=$num ; $j++) { 
		 if($i<=$num/2&&($i==$j||$i+$j==$num)||($i>$num/2&&$j==$num/2)) {
		 	echo "* ";
		 }else{
		 	echo "&nbsp&nbsp ";
		 }
		}echo "</br>";
	
}	
}
Print_Y(20);
?>