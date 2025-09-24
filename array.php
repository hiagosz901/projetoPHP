<?php 
	/*
	$aluno = array();

	$aluno[0]="Maria";
	$aluno[1]="Josephe";
	$aluno[2]="Alana";
	$aluno[3]="Sebastian";

	echo ($aluno[0] . "<br/>" . $valor[1]);
	
$nomes = array("Maria", "Josephe","Alana");

$idade[0] = 20;
$idade[1] = 10;
$idade[2] = 15;

echo("<br/>");

echo($nomes[0] . "<br/>".  $nomes[1] . "<br/>". $nomes[2]);

$email[] = "Maria@hotmail.com";
$email[] = "Josephe@outlook.com";
$email[] = "Alana@gmail.com";


echo("<br/>");
echo("<pre>");
print_r($email);
echo("<br/>");
var_dump($email);
echo("</pre>");


$aluno = array("Osvaldo", 26, "osvaldo@gmail.com", 25.5, true);

echo("<pre>");
var_dump($aluno);
echo("</pre>");
echo("<br/>");
echo("<pre>");
var_dump($aluno);
echo("</pre>");
*/
/*
for ($i=0 ; < 6 ; $i++ ){
	$vetor[$i] = 12;
}
for ($i=0 ; < 6 ; $i++){
	echo "O valor do vetor:" . $vetor[$i] . "<br/>";
}

#copia pag 3 aula 8 
$nome1 = "Marcia"
$nome2 = "Joseph"
$nome3 = "Enzo"
$nome4 = "Pablo"
$nome5 = "Clarck"

echo("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");

?>

<<?php 

 
$nome = array("Marcia","Joseph", "Enzo", "Pablo", "Clarck");

echo "Os nome no array <br/>";

foreach( $nome as $nomes){

	echo "<br/>".$nomes;

}
*/
/*

$num = array(1,2,3,4,5);
	
	foreach($num as $valor) {
		echo"Valor e $valor <br/>";
	}

$Num[0] = "um";
$Num[1] = "dois";
$Num[2] = "três";
$Num[3] = "quatro";
$Num[5] = "cinco";

foreach($num as $valor){
	echo "Valor é $valor <br/>";
}



$nome["MA"] = "Marcos";
$nome["PA"] = "Paulo";
$nome["Mi"] = "Miriam";

echo("<pre>");
var_dump($nome);
*/
$salarios = array ("João" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "Salario de João é" . $salarios['João'] . "<br/>";
echo "Salario de Pedro é" . $salarios['Pedro']. "<br/>";
echo "Salario de Maria é" . $salarios['Maria']. "<br/>";

$salarios['João'] = "Alto";
$salarios['Pedro'] = "Medio";
$salarios['Maria'] = "Baixo";

echo "Salario de João é" . $salarios['João'] . "<br/>";
echo "Salario de Pedro é" . $salarios['Pedro']. "<br/>";
echo "Salario de Maria é" . $salarios['Maria']. "<br/>";



 ?>



