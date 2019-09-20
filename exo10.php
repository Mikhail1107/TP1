<?php

	
	$nombre = 5;

	// recursivite

	function Factorielle($chiffre) {
		echo $chiffre;

		if ($chiffre == 1) {
			echo "=";
			return 1; 
		} else {
			echo "*";
			return $chiffre * Factorielle($chiffre - 1);
		}
	}
	echo Factorielle(5);

?>