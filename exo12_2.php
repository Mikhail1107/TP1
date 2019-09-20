<?php

	function calculHeuresMinutesSecondes($nb_secondes) {
		$heures = floor($nb_secondes / 3600);
		$reste = $nb_secondes % 3600;
		$minutes = floor($reste / 60);
		$secondes = $reste % 60;

		if ($heures > 0 || $minutes > 0 || $secondes > 0) {

			$phrase  = $nb_secondes . "s est égal à ";
			$phrase .= ($heures > 0) ? ($heures . "h") : "";
			$phrase .= ($minutes > 0) ? ($minutes . "m") : "";
			$phrase .= ($secondes > 0) ? ($secondes . "h") : "";

		} else {
			$phrase = "Y'a pas de secondes";
		}
		
		return $phrase;

	}


	echo calculHeuresMinutesSecondes(365);


?>