<?php

 	$longueur_ab = 10;
 	$longueur_ac = 13.5;

 	$longueur_bc_au_carre = ($longueur_ab * $longueur_ab) + ($longueur_ac * $longueur_ac);

 	$longueur_bc = sqrt($longueur_bc_au_carre);

 	echo "La longueur de l'hypothénuse est : ";
 	echo $longueur_bc;
 	echo 'test1';

?>