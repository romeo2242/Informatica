<?php


	$h1 = array('hotel', 'ham', 'hamster', 'high');

	$h2 = ['height', 'hippy', 'home', 'hockey'];

	$h3 = array(
		0 => "horror",
		1 => "hollywood",
		2 => "hangar",
		3 => "homo"
	);

	$h4 = array(
		"mc" => "hamburger",
		"hc" => "handicap",
		"hw" => "halloween",
		"he" => "help"
	);

	$h5 = array(0 => 'herpes', 'hostess', 'homeless', 'hardware');

	//stampa h1
	echo "{<br>[";
	for($i=0; $i<4; $i++){
		echo $h1[$i];
		if($i!=3)echo ", ";
	}
	echo "], ";

	//stampa h2
	echo "<br>[";
	for($i=0; $i<4; $i++){
		echo $h2[$i];
		if($i!=3)echo ", ";
	}
	echo "], ";
	
	//stampa h3
	echo "<br>[";
	for($i=0; $i<4; $i++){
		echo $h3[$i];
		if($i!=3)echo ", ";
	}
	echo "], ";

	//stampa h4
	echo "<br>[";
	echo $h4["mc"] . ", ";
	echo $h4["hc"] . ", ";
	echo $h4["hw"] . ", ";
	echo $h4["he"];
	echo "], ";
	

	//stampa h5
	echo "<br>[";
	for($i=0; $i<4; $i++){
		echo $h5[$i];
		if($i!=3)echo ", ";
	}
	echo "]<br>}<br><br>";

	//aggiungio un valore a ciascun vettore
	$h1[] = 'hiv';
	$h2[] = 'hawaii';
	$h3[] = "homunculus";
	$h4["ha"] = "handball";
	$h5[] = 'hitler';

	//stampa nuovi oggetti
	echo "Stampa elementi aggiunti in coda al vettore:<br>";
	echo $h1[4] . ", ";
	echo $h2[4] . ", ";
	echo $h3[4] . ", ";
	echo $h4["ha"] . ", ";
	echo $h5[4];








