<?php 
function Print_F($n){
for ($i=1; $i<=$n ; $i++) {
for ($j=1; $j<=$n ; $j++) {
	
if (($i==1||$i==$n/2+1)) {
 	echo "* ";
 } 
	
} 
	echo "*";

	echo "</br>";
}
}
Print_F(10);
?>