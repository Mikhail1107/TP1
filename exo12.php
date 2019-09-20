<?php

	function calculHeuresMinutesSecondes($nb_secondes) {
		$heures = floor($nb_secondes / 3600);
		$reste = $nb_secondes % 3600;
		$minutes = floor($reste / 60);
		$secondes = $reste % 60;

		return $nb_secondes . "s est égal à " . $heures . "h" . $minutes . "m" . $secondes . "s";
	}


	// echo calculHeuresMinutesSecondes(347872);
	echo calculHeuresMinutesSecondes(3602);

?>