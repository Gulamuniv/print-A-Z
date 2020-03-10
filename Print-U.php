<?php
function print_U($num){
for ($i=1; $i <=$num ; $i++) { 
	for ($j=1; $j<=$num ; $j++) { 
		 if ($j==1||$j==$num) {
			echo "* ";
		}elseif($i==$num){
			echo "* ";
		}
		else{
			echo "&nbsp&nbsp ";
		}
		
	}
	echo "</br>";
}
}
print_U(10);
?>