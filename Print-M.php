<?php 
function print_M($num){
for ($i=1; $i<=$num ; $i++) { 
	echo "* ";
	for ($j=2; $j<=$i ; $j++) { 
		echo "&nbsp&nbsp";
	}echo "* ";
	for ($k=$num-1; $k>=$i ; $k--) { 
		echo "&nbsp&nbsp&nbsp ";
	}echo "* ";
	for ($j=2; $j<=$i ; $j++) { 
		echo "&nbsp&nbsp";
	}echo "* ";
	echo "</br>";
}
}
print_M(20);
?>