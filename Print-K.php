<?php
function print_K($num){
for ($i=1; $i<=$num ; $i++) { 
	echo "*";
	for ($j=($num-$i-1); $j>=$i ; $j--) { 
		echo "&nbsp ";
	}
	for ($k=($num-$num/2)+1; $k<=$i ; $k++) { 
		echo "&nbsp ";
	}
	echo "*";
	echo "</br>";
	
}
}
print_K(20);
?>