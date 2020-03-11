<?php 
function print_A($n) { 
for ($i=1; $i <=$n ; $i++) { 
	
	for ($j=$n; $j>=$i ; $j--) { 
		echo"&nbsp&nbsp";
	}for ($k=2; $k <=2*$i-1 ; $k++) { 
		if ($i==($n/2)&&$k=2*$i-1) {
			for ($l=1; $l<=($n/2-1) ; $l++) { 
				echo "* &nbsp";
			}
		}
		
		if ($k==2||$k==2*$i-1) {
			echo "* ";
		}else{
			echo "&nbsp&nbsp";
		}
		
		
	}
	
	echo "</br>";
	echo("&nbsp");
}

}

print_A(30);
?>