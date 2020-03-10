<?php 
function print_B($n){
	for ($i=1; $i <=$n ; $i++) { 
		//echo "+"."$i";
		for ($j=1; $j <=$n ; $j++) { 
			if ($i==$n/2) {
			echo "&nbsp&nbsp";
			echo "*  ";
		}else{
			echo "&nbsp&nbsp";
			//echo "$j";
			if ($j==1||$j==$n||$i==$n||$i==1) {
				if ($j==$n) {
					echo "  ";
				}
				echo "* ";
			}else{
				echo "&nbsp&nbsp&nbsp";
			}
			
		}
		}
		
		
		echo "</br>";
	}
}
print_B(10);
?>