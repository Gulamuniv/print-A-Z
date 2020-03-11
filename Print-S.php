<?php
function Print_S($num){
	for ($i=1; $i<=$num ; $i++) { 
		echo "* ";
	}echo "</br>";
for ($i=1; $i<=$num/2 ; $i++) {
echo "* ";
if ($i==$num/2) {
	for ($j=1; $j<=$num-1 ; $j++) { 
		echo "* ";
	}
}echo "</br>"; 
}
for($j=1; $j<=$num-$num/2-1; $j++)
     {
           for($i=1; $i<=$num-1; $i++)
           	  printf("&nbsp&nbsp ");
           	echo "* ";
            echo "</br>";
     }
     for ($i=1; $i<=$num ; $i++) { 
		echo "* ";
	}echo "</br>";
}

Print_S(10);
?>