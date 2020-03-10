<?php
function  print_X($num){
	$count =2*$num-1;
for ($i=1; $i<=$count ; $i++) { 
	for ($j=1; $j<=$count ; $j++) { 
		if ($j==$i||$j==$count-$i+1) {
			echo "* ";
		}else{
			echo "&nbsp&nbsp&nbsp ";
		}
	}
	
	echo "</br>";
}
}
print_X(5);

?>