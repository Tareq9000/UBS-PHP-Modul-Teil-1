<!-- 
Dieses Programm kann 

-->
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<meta rel="stylesheet"/>
    <title>Galerie</title>
<style>
body{
    background-color: darkslategrey;
}
div{
	float: left;
	width: 100px;
	height: 160px;
	border: 15px solid darkslategrey;
}
div:hover{
	background: lightslategrey;
}
p{
	color: black;
	text-align:center;
}
button{
width: 100px;
border: 2px solid darkorange;
background-color: orange;
}
button:hover{
background-color: darkorange;
}
input{
background-color: lightslategrey;
border: 2px solid slategrey;
}

</style>
</head>
<body>
<h1>Guarda im Herbst</h1>
<?php
        // Formular fürs durchsuchen
        echo '<form method="post" enctype="multipart/form-data">
			  <input type="file" name="meinBild" >
			  <button type="submit" name="hinzufügen">Hinzufügen</button>
			  </form>';
        // Link
        $dir = "C:\\xampp\\htdocs\\_galerie\\thumbnails\\";
        // Bilder werden gelöscht

		if (isset($_POST['hinzufügen'])) {
			
			$_FILES['meinBild']['name'];
			$_FILES['meinBild']['size'];
			$_FILES['meinBild']['tmp_name'];
			$_FILES['meinBild']['error'];
			$name = $_FILES['meinBild']['tmp_name'];
			$img = 'images\\'.$_FILES['meinBild']['name'];
			move_uploaded_file($name, $img);

			$thumbimg = imagecreatefromjpeg($img);
			$width = imagesx($thumbimg);
			$height = imagesy($thumbimg);
			$width2 = 100;
			$height2 = 80;

			$thumbimig2 = imagecopyresized($thumbimg2, $thumbimg, 0, 0, 0, 0, $width2, $height2, $width, $height);

			move_uploaded_file($name, imagejpeg($thumbimg2));
		}

		
        // Galerie
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if($file != "."){
                    if($file != ".."){
                       // Bilder anzeigen
                        echo '<a href="'."images\\".$file.'"><div>';
                        echo '<img src="'."thumbnails\\".$file.'" >'."\n";
                        // Bildername filtern und anzeigen
                        $filenew = str_replace(".jpg","",$file);
                        $filenew = str_replace("ae","ä",$filenew);
                        $filenew = str_replace("_"," ",$filenew);
                        $filenew = str_replace("ue","ü",$filenew);
                        echo '<p>'.$filenew = ucfirst($filenew).'</p>';
                        // Bilder löschen
                        echo '<form method="post" action="loeschen.php">';
                        echo '<button type="submit" name="senden">löschen</button>';
                        echo '<input type="hidden" name="name" value="'.$file.'">';
                        echo '</form>';
                        echo '</div></a>';
                       
                    }}
                }
                closedir($dh);
            }
        }

    ?>
    
</body>
</html>