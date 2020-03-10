<?php
function print_J($num){
	for ($i=1; $i<=$num ; $i++) { 
		echo "* ";
	}echo "</br>";
for ($i=1; $i<=$num ; $i++) { 
	for ($j=1; $j<=$num ; $j++) { 
		if ($i==$num||$j==$num/2) {
			echo "*";
		}
		elseif ($j==ceil($num/2)) {
			echo "* ";
		}elseif(($i==$num||$i==$num-1||$i==$num-2)&&($j==1)){
          echo "*&nbsp ";
		}
		else{
			echo "&nbsp&nbsp&nbsp&nbsp ";
		}
		
	}
	echo "</br>";
}

}
print_J(10);
?>