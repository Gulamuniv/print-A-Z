<?php 
function Print_H($num){
for ($i=1; $i<=$num ; $i++) { 
	for ($j=1; $j <=$num ; $j++) { 
		if ($i==$num/2||$j==1||$j==$num) {
			echo "* ";
		}else{
			echo "&nbsp&nbsp ";
		}
		
	}
	echo "</br>";
}
}
Print_H(10);
?>