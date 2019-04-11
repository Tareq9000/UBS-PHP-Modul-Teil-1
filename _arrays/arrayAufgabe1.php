<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
	<?php
    $array = ["2017","2018","2019"];
	for ($i = 0; $i < 3; $i++){
		echo $array[$i]."\n";
	}
	echo "<br>";

	foreach (range(2017,2019) as $s){
		echo $s."\n";
	}
	echo "<br>";
	
	var_dump($array);
	echo "<br>";
	print_r($array);
	echo "<br>";
	
	$orte = ["Zürich","Bern","Zug","Genf","Lausanne","Schwyz","Greifensee","Uster"];
	shuffle($orte);
	foreach ($orte as $o){
		echo $o."\n";
	}
	echo "<br>";
	sort($orte);
	foreach ($orte as $o){
		echo $o."\n";
	}
	?>
</body>
</html>