<?php


	function EstPair($nombre) {

		if ($nombre % 2 == 0) {
			return $nombre . " est pair";
		} else {
			return $nombre . " est impair";
		}

	}


	$toto = EstPair(12);

	echo $toto;


?>
