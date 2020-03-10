<?php
function Print_N($col){
for ($i=1; $i<=$col ; $i++) {
	echo "*";
for ($j=1; $j <=2*$i-1 ; $j++) { 
	echo "&nbsp";
	}
	if ($i!=0&&$i!=$col+1) {
		echo "*"; 
	}else{
		//echo "&nbsp";
	}
	for ($k=1; $k<=($col-$i+1) ; $k++) { 
		echo "&nbsp&nbsp";
	}
	echo "*";
	
	echo "</br>";
	
}
 
}
Print_N(10);
?>