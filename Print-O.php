<?php
function Print_O($num){
	for ($i=1; $i<=$num-1 ; $i++) { 
	if ($i==1) {
		echo "&nbsp ";
	}else{
		echo "* ";
	}
	}echo "</br>";
for ($i=1; $i<=($num/2+$num/5) ; $i++) {
for ($j=1; $j<=$num ; $j++) { 
		if ($j==1||$j==$num) {
			echo "*";
		}else{
			echo("&nbsp&nbsp ");
		}
	}
	 
	echo "</br>";
}
for ($i=1; $i<=$num-1 ; $i++) { 
	if ($i==1) {
		echo "&nbsp ";
	}else{
		echo "* ";
	}
	}
}
Print_O(10);
?>