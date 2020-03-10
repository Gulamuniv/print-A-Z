<?php 
function print_G($num){
/* for ($i=1; $i <=$num ; $i++) { 
 	echo "* ";
 }echo "</br>";*/
 for ($i=1; $i<=$num ; $i++) {
   
 	for ($j=1; $j<=$num ; $j++) {
 			
 			if(($i==$num-8||$i==$num-7||$i==$num-6||$i==$num-5)&&($j==$num)){
            echo " ";
 			}
 			elseif(($i==$num-4)&&($j==$num-2||$j==$num-1||$j==$num-3||$j==$num-4)){
              echo "* ";
 			}
 		elseif ($i==1||$i==$num||$j==1||$j==$num) {
 			
 			echo "* ";
 		}else{
 			//echo "$j";
 		  echo "&nbsp&nbsp ";
 		}
 	}echo "</br>";
 }
}
print_G(10);
?>