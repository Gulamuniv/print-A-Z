<?php
function print_L($num){
for ($i=1; $i<=$num ; $i++) { 
	echo "* ";
	for ($j=1; $j<=$num ; $j++) { 
		if ($i==$num) {
			echo "* ";
		}
	}
	echo "</br>";
}
}
print_L(10);
?>