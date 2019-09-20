<?php

	$angle_alpha = 40;

	$position_x = cos($angle_alpha);
	$position_y = sin($angle_alpha);

	/*
	echo "La position du point P en x est de : ";
	echo $position_x;
	echo " et en y de : ";
	echo $position_y;
	*/

	// ou 

	echo 'La position en "P" est de (' . $position_x . ',
	' . $position_y . ')';
?>