<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
    //Aufgabe 2
    $person = ["Name" => "Deubelbeiss", "Vorname" => "Isabella", "Ort" => "Altstetten"];
    foreach ($person as $k => $v){
		echo " Schlüssel:".$k.", " ." Wert:".$v."<br>";
	}
	echo "<br>";
    asort($person);
    ksort($person);

    //Aufgabe 4
function asort($a){
    asort($a);
    foreach ($a as $k => $v){
		echo " Schlüssel:".$k.", " ." Wert:".$v."<br>";
	}
	echo "<br>";
}
function ksort($a){
    ksort($a);
    foreach ($a as $k => $v){
		echo " Schlüssel:".$k.", " ." Wert:".$v."<br>";
	}
	echo "<br>";
}
function arsort($a){
    arsort($a);
    foreach ($a as $k => $v){
		echo " Schlüssel:".$k.", " ." Wert:".$v."<br>";
	}
	echo "<br>";
}

?>
</body>
</html>