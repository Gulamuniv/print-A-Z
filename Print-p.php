<?php 
function Print_P($n){
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
	}echo "</br>";

for ($i=1; $i<=$n/2+1 ; $i++) { 
	echo "* ";
	echo "</br>";
}
}
Print_P(20);
?>