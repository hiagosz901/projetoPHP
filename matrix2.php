<?php 
	$arr1 = array( 
		array(25,12,35,),	
		array(85,47,98,),	
		array(32,28,105,)
	);

	$arr2 = array( 
		array(15,21,32,),	
		array(8,74,97,),	
		array(32,28,105)
	);


	$arr3 = array( 
		array(),	
		array(),	
		array()
	);
	
	for ($a=0; $a <3 ; $a++){ 
		for ($b=0; $b <3; $b++) { 
			$arr3[$a][$b] = $arr1[$a][$b] + $arr2 [$a][$b];
		} 
	}
	$soma1 = 0;
	$soma2 = 0;
	$soma3 = 0;

	for ($a=0; $a<3 ; $a++) { 
		for ($b=0; $b<3; $b++) { 
			$soma1 = $soma1 + $arr1[$a][$b];
			$soma2 = $soma2 +  $arr2[$a][$b];
			$soma3 = $soma3 = $arr3 [$a][$b];


		}
	}
	echo "<pre>";
	print_r("Matriz 1: $soma1");
	echo "</pre>";

	echo "<pre>";
	print_r("Matriz 2: $soma2");
	echo "</pre>";


	echo "<pre>";
	print_r("Matriz 3: $soma3");
	echo "</pre>";
 ?>