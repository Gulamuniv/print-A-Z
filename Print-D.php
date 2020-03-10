<?php 
function print_D($num){
for ($i=1; $i <=$num-2; $i++) { 
	echo "*";
}echo "</br>";
for ($i=1; $i<=$num ; $i++) { 
	for ($j=1; $j<=$num ; $j++) { 
		if ($j==2||$j==$num) {
			echo "*";
		}
		else{
			echo "&nbsp ";
		}
	}echo "</br>";
}
for ($i=1; $i <=$num-2; $i++) { 
	echo "*";
}	
}
print_D(20);

?>