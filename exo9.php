<?php

	$somme = 0;

	for($i = 1 ; $i <= 30 ; $i++) {

		if ( EstPair($i) == true ) {
			$somme += $i;
		}

	}
	
	echo $somme;




	function EstPair($nombre) {

		if ($nombre % 2 == 0) {
			return true;
		} else {
			return false;
		}

	}

?>