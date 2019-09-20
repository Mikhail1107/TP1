<?php

	$tableau = [14, 25, 67, 102 , -45, 2, 0, -87, 25, 5];

	// echo min($tableau);
	$val = $tableau[0];

	for($i = 0 ; $i < count($tableau) ; $i++) {
		if ($tableau[$i] < $val){
			$val = $tableau[$i];
		}
	}

	//ou

	foreach($tableau as $value) {
		
		if ($value < $val) {
			$val = $value;
		}

		// ou

		$val = ($value < $val) ? $value : $val;

	}

	echo $val;


?>