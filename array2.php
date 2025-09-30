<?php 

/*	$emp =  array(
		array(1,"José",4000),
		array(2,"Maria",5000),
		array(3,"João",3000)
	);

	for ($linha=0;$linha<3;$linha++){
		for($coluna=0;$coluna<3;$coluna++){
			echo $emp[$linha][$coluna]." ";
		}
		var_dump($emp);
	}


     echo "<pre>";
	print_r($emp);
	echo "</pre>";

$arr = array('v' => 'vermelho', 'v' => 'verde', 'a' =>
		array('azul','marrom','preto'));

echo json_encode($arr);*/

	$arr =  array ('v' => 'verde', 'e'=>'verde', 'z' => 'azul');
	foreach ($arr as $key => $value) {
		echo $key ."=>" .$value . "\n";
	}
 ?>