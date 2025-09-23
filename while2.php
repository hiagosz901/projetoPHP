<?php 

$num1=5;
$num2=60;
$cont=0;


while ($num1==0 || $cont<3 ) {

	
	
	if($num1>$num2) {
		echo ("O maior número é o $num1<br/>");
		

	} else{
		echo ("O maior número é o $num2<br/>");
		
	} 
	$cont++;
	echo ("A entrada é 0<br/>");
}
	
/*

$cont=1;

while ($cont<100) {
	$cont++;
	echo ("$cont<br/>");

	if ($cont % 10 ==0) {
		echo ("$cont é múltiplo de 10<br/>");
		
	}
	
}



$cont=0;
$num1=1;

while ($cont<64) {
	$cont++;
	
	echo ("$num1<br/>");
	$num1= $num1*2;	
	// code...
}

*/
 ?> 