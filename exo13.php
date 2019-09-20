<?php

	$tableau = [
		"denis",
		"est",
		"un",
		"sacre",
	    "sacre",
	    "zozo", 
	    "hehe", 
	    "!"
	];

	$tableau[5] = "zozo";
	$tableau[] = "coco";

	// for($i = 0 ; $i < count($tableau) ; $i++) {
	// 	echo $tableau[$i] . "<br>";
	// }

	// exactement pareil

	foreach($tableau as $val) {
		echo $val . "<br>";
	}

?>