<?php

	function sorteios(){
		$vet = array();
		for ($x = 0; $x < 5; $x++)
			$vet[] = rand(0,99);
		return $vet;
	}
	function inport(){
		$vet2 = array();
		for ($x = 0; $x < 5; $x++)
			$vet2[$x] = rand(0,99);
		return $vet2;
	}

?>
