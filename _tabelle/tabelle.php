<!DOCTYPE html>
<?php 
/*
Übung Tabelle, Tabelle ausgeben
27.03.2019
*/
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<table border="2px solid black">
    <?php
         for ($index = 0; $index < 5; $index++){
             echo '<tr><td><p style="color:#ff0000">'.$index.'</p></td><td><p style="color:black">hello world</p></td></tr>';
}
    ?></table>

</body>
</html>