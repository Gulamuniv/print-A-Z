<?php
function print_V($num){
	for ($i=1; $i<=$num ; $i++) {
	for ($j=1; $j<=$i ; $j++) { 
	 	echo "&nbsp";
	 }echo "*"; 
	 for ($j=($num); $j>=$i+1 ; $j--) { 
	 	echo "&nbsp&nbsp ";
	 } 
		echo "*";
		echo "</br>";
	}
}
print_V(10);
?>