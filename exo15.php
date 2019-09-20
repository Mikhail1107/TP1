<?php

	$tableau = [14, 25, 67, 102 , -45, 2, 0, -87, 25, 5];
	$tableau2 = [];



	for($i = count($tableau) ; $i > 0 ; $i--) {

		$min = min($tableau);
		$tableau2[] = $min;

		unset($tableau[array_search($min,$tableau)]);

	}

	$tableau = $tableau2;

	var_dump($tableau);


?>