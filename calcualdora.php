<?php 

	function somar($num1, $num2){

		return($num1 + $num2);
	}

	function subtrair($num1, $num2){

		return($num1 - $num2);
	}

	function mulltiplicar($num1,$num2){

		return($num1 * $num2);
	}

	function dividir($num1, $num2){

		return($num1 / $num2);
	}


	echo ("1 = Soma <br/>");
	echo ("2 = Subtrair <br/>");
	echo ("3 = Multiplicação <br/>");
	echo ("4 = Divisão <br/> <br/>");


	$opcao= 3;
	$num1=10;
	$num2=2;


	if ($opcao==1) {
		$var= "Soma";
		$resposta = somar($num1, $num2);

	} elseif ($opcao==2) {
		$var= "Subtração";
		$resposta = subtrair($num1, $num2);
	
	} elseif ($opcao==3) {
		$var= "Mulltiplicação";
		$resposta = mulltiplicar($num1, $num2);
	
	} elseif ($opcao==4) {
		$var= "Divisão";
		$resposta = dividir($num1, $num2);
		
	}

	function resultado($num1, $num2, $var, $resposta){
		echo ("Números digitados: $num1 , $num2 <br/>");
		echo ("Calculo escolhido: $var <br/>");
		echo ("O resultado é: ");
		echo ($resposta);
	}

	resultado($num1, $num2, $var, $resposta);
 ?>