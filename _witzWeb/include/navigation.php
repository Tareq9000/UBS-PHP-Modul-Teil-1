<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="layout.css" type="text/css" rel="Stylesheet"/>
</head>
<body>
<?php
$navpunkte = [["Computer","computer.php",1],
				["Sport","sport.php", 1],
				["Cartoons","cartoon.php",1],
				[" > Eva","eva.php",2],
				[" > Hägar","haegar.php",2],
				[" > Emil","emil.php",2],
				["Home","index.php",1]];
	
	echo '<nav>';
	for($i = 0; $i < count($navpunkte) ; $i++){
		echo '<ul><li>';
		if($navpunkte[$i][2] == 2){
		echo '<a class="unterkapitel" href="'.$navpunkte[$i][1].'">'.$navpunkte[$i][0].'</a>';
		}else{
		echo '<a href="'.$navpunkte[$i][1].'">'.$navpunkte[$i][0].'</a>';
		}

		echo '</li></ul>';

	}
	echo '</nav>';
?>


</body>
</html>