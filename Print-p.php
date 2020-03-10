<?php 
function Print_P($col,$row){
for ($i=1; $i<=$col; $i++) { 
	
	for ($j=1; $j<=$row ; $j++) {
		
	if ($i==1) {
			for ($j=1; $j<=$row ; $j++) { 
				echo "*&nbsp";
			}
		} if (($i==$col/2+1)&&($j==1||$j==$row)) {
			echo " ";
		}elseif(($i==$col-4||$i==$col-3||$i==$col-2||$i==$col-1||$i==$col)&&($j==$row)){
          echo " ";
		}
		elseif ($j==1||$j==$row) {
		 echo "* ";
		}else{
			echo "&nbsp&nbsp&nbsp";
		}

}echo "</br>";
//echo "+"."$i";
if ($i==$col/2) {
		for ($k=1; $k<=$row ; $k++) { 
			echo "*&nbsp";
		}
	}
}
}
Print_P(12,12);
?>