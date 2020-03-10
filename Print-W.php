<?php
function  Print_W($num){
for ($i=1; $i<=$num ; $i++) { 
	echo "*";
	for ($j=$num-1; $j>=$i ; $j--) { 
	echo "&nbsp&nbsp";
	}echo "*";
	for ($j=1; $j<=2*($i)-2 ; $j++) { 
		echo "&nbsp&nbsp";
	}echo "*";
	for ($j=$num-1; $j>=$i ; $j--) { 
	echo "&nbsp&nbsp";
	}echo "*";
	
	echo "</br>";
}
}
Print_W(10);
?>