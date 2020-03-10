<?php 
function Print_S($n){
		for ($i=1; $i<=$n ; $i++) { 
			for ($j=1; $j<=$n ; $j++) { 
				if ($i==1) {
				for ($j=2; $j<=$n-1 ; $j++){
					echo "*&nbsp&nbsp";
			     }
			 }
			     if ($i==$n/2) {
			     	for ($j=2; $j<=$n-1 ; $j++){
					echo "*&nbsp&nbsp";
			     }
			     }
			  if ($i==$n) {
			     	for ($j=2; $j<=$n-1 ; $j++){
					echo "*&nbsp&nbsp";
			     }
			     }
				if(($j==$n&&($i==$n-8||$i==$n-7||$i==$n-6))) {
					echo " ";
					}
					elseif($j==1&&($i==$n-4||$i==$n-3||$i==$n-2||$i==$n-1)){
					 echo " ";
					}
					elseif ($j==1||$j==$n){
					 echo "* ";
					
				  }else{
					echo("&nbsp&nbsp&nbsp&nbsp");
				}
			
			}

			
		//echo "$i";
			echo "</br>";
	}
}
Print_S(10);
?>