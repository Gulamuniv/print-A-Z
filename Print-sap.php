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
 	

 	
	echo "</br>";
	}
}

function print_A($n) { 
for ($i=1; $i <=$n ; $i++) { 
	
	for ($j=$n; $j>=$i ; $j--) { 
		echo"&nbsp&nbsp";
	}for ($k=2; $k <=2*$i-1 ; $k++) { 
		if ($i==($n/2)&&$k=2*$i) {
			for ($l=0; $l<=($n/2-1) ; $l++) { 
				echo "* &nbsp";
			}
		}
		
		if ($k==2||$k==2*$i-1) {
			echo "<font color='red'>*</font> ";
		}else{
			echo "&nbsp&nbsp";
		}
		
		
	}
	
	echo "</br>";
	echo("&nbsp");
}
echo "<br><br>";
}
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
echo "<br><br>";
}
function Print_N($col){
for ($i=1; $i<=$col ; $i++) {
	echo "<font color='blue'>*</font>";
for ($j=1; $j <=2*$i-1 ; $j++) { 
	echo "&nbsp";
	}
	if ($i!=0&&$i!=$col+1) {
		echo "<font color='green'>*</font>"; 
	}else{
		echo "&nbsp";
	}
	for ($k=1; $k<=($col-$i+1) ; $k++) { 
		echo "&nbsp&nbsp";
	}
	echo "<font color='yellow'>*</font>";
	
	echo "</br>";
	
}
 echo "<br><br>";
}

Print_S(10);
Print_A(10);
Print_P(12,12);
Print_N(10);
Print_A(10);

?>
