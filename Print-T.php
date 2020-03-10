<?php
function print_T($num){
	for ($i=1; $i<=$num ; $i++) { 
	echo "* ";
	}echo "</br>";
for ($i=1; $i<=$num ; $i++) {

	for ($j=1; $j<=$num ; $j++) { 
		if ($j==$num/2) {
			echo "* ";
		}else{
			echo "&nbsp&nbsp ";
		}

	}
	echo "</br>";
}
}
print_T(10);
?>