<?php 
function  print_C($num){
for ($i=1; $i<=$num ; $i++) { 
		echo "* ";
	}echo "</br>";
    for ($i=1; $i <=$num ; $i++) { 
    	for ($j=1; $j<=$num ; $j++) { 
    		if ($j==1) {
    			echo "* ";
    		}else{
    			echo "&nbsp";
    		}
    		
    	}echo "</br>";
    }
	for ($i=1; $i<=$num ; $i++) { 
		echo "* ";
	};			
}
print_C(10);
?>