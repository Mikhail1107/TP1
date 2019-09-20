<?php

	$value_to_guess = rand(0,100);
	echo "Bonjour ! Choisissez un nombre entre 0 et 10 :";
	echo "\n";

	while (true) {

		echo "Quelle valeur ?";
		$handle = fopen("php://stdin","r");
		$value_user = fgets($handle);

		if ($value_user == $value_to_guess) {
			echo "Bravo le veau !";
			break;		
		} elseif ($value_user < $value_to_guess) {
			echo "Trop petit mon petit";
			echo "\n";
		} elseif ($value_user > $value_to_guess) {
			echo "Trop grand, dugland";
			echo "\n";
		} else {
			// ne devrait jamais arriver
			echo "T'as tapé de la merde";
			break;
		}

	}

?>