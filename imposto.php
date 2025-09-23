<?php 



$vb= 20000;
$clube= 3;
$por= 14;
$desc= $vb*$por/100; 
$descir=0;
$sl= 0;

echo("Salario Folha: R$$vb <br/>");
echo ("Desconto do INSS: R$$desc <br/>");



if ($vb>0 && $vb<3036) {
	$ir= 0;

} elseif ($vb>3036 && $vb<3533) {
	$ir= 7;

} elseif ($vb>3533 && $vb<4688) {
	$ir= 15;

} elseif ($vb>4688 && $vb<5830) {
	$ir= 22.5;

} elseif ($vb>5830) {
	$ir= 27.5;
}


if ($clube==1) {
	$descc= 50;
	$clube= "A";

} elseif ($clube==2) {
	$descc= 30;
	$clube= "B";

} elseif ($clube==3) {
	$descc= 20;
	$clube= "C";
	
}

function imposto($vb, $ir, $descir, $desc ,  $sl, $clube, $descc){
	$descir= $vb*$ir/100;
	$sl= $vb-$desc-$descir-$descc;
	echo("Desconto IR: R$$descir <br/>");
	echo ("Clube escolhido: $clube ,  e seu desconto é de : R$$descc <br/>");
	echo ("Salario Liquido: R$$sl");
}

	imposto($vb, $ir, $descir, $desc ,  $sl, $clube, $descc);





 ?>