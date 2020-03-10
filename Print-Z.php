<?php
function Print_Z($num){
for ($i=0; $i <$num ; $i++) { 
	echo "*&nbsp ";
}echo "</br>";

for ($i=1; $i <=$num-1 ; $i++) { 
 for ($j=1; $j<=2*($num-$i-1) ; $j++) { 
 	echo "&nbsp ";
 }
 echo "*";
 echo "</br>";
}
for ($i=1; $i <=$num ; $i++) { 
	echo "*&nbsp ";
}
}
Print_Z(10);
?>