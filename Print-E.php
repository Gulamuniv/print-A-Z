<?php 
function Print_E($num){
	for ($i=1; $i<=$num ; $i++) { 
		for ($j=1; $j<=$num; $j++) { 
			if ($j==1||$i==$num/2||$i==1||$i==$num) {
				echo "*";
			}else{
				echo "&nbsp ";
			}
			
		}
		
		echo "</br>";
	}
}
Print_E(10);
?>