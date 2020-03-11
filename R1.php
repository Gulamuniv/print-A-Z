<?php
function RR1($n){
	for ($i=1; $i<=$n ; $i++) { 
		echo "* ";
	}echo "</br>";
for ($i=1; $i<=$n/2+1 ; $i++) { 
	for ($j=1; $j<=$n; $j++) { 
		if ($j==1||$j==$n) {
			echo "*&nbsp ";
		}else{
			echo "&nbsp&nbsp&nbsp";
		}
	}echo "</br>";
}
  for ($i=1; $i<=$n ; $i++) { 
		echo "* ";
	}
 for ($i=1; $i<=$n ; $i++) { 
 	echo "</br>";
		for ($j=1; $j<=2*$i+1 ; $j++) { 
			if ($j==$i||$j==1) {
			echo "*";
			}else{
				echo "&nbsp&nbsp&nbsp ";
			}
			
		}
	}echo "</br>";

}
RR1(30);
?>