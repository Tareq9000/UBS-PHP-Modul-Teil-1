<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Galerie</title>
<style>
body{
    background-color: darkslategrey;
}
div{
	float: left;
	width: 100px;
	height: 140px;
	border: 15px solid darkslategrey;
}
div:hover{
	background: lightslategrey;
}
p{
	color: black;
	text-align:center;
}

</style>
</head>
<body>
<h1>Guarda im Herbst</h1>
    <?php
        $dir = "C:\\xampp\\htdocs\\_galerie\\thumbnails\\";

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if($file != "."){
                    if($file != ".."){
                        echo '<a href="'."images\\".$file.'"><div>';
                        echo '<img src="'."thumbnails\\".$file.'" >'."\n";
                        
                        $file = str_replace(".jpg","",$file);
                        $file = str_replace("ae","ä",$file);
                        $file = str_replace("_"," ",$file);
                        $file = str_replace("ue","ü",$file);
                        echo '<p>'.$file = ucfirst($file).'</p>';
                        echo '</div></a>';
                    }}
                }
                closedir($dh);
            }
        }
    ?>
    
</body>
</html>