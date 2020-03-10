<?php 
function print_RR($num){
for ($i=1; $i<=$num ; $i++) {
	echo "*";

	for ($k=$num/2+1; $k<=$i ; $k++) { 
		echo "&nbsp&nbsp&nbsp ";
	} echo "";
	
	for ($j=1; $j<=$num; $j++) { 
		if(($i==$num||$i==$num-1||$i==$num-2||$i==$num-3||$i==$num-4)&&$j==$num){
         	echo "&nbsp";
         }
         elseif ($i==1||$i==$num/2||$j==$num||$j==1) {
         	echo "* ";
         }
         else{
         	echo "&nbsp&nbsp ";
         }
		
	}
	
	
	echo "</br>";
}
}
print_RR(10);
?>