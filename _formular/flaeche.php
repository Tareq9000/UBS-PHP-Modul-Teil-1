<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
<style>
body{
border: 4px solid black;
}
div{
background-color:grey;
size:auto;
}
</style>
</head>
<body>
    <?php
    if(isset($_POST['senden'])){
        $laenge = $_POST['laenge'];
        $breite = $_POST['breite'];
        echo "Die Fläche von ".$laenge." und ".$breite." beträgt: ".$laenge * $breite;
    }else{
   
       echo '<h2>Flächenberechner</h2>
    <form method="post" action='.$_SERVER["PHP_SELF"].'>
        
        <label>
            Länge: <input type="text" name="laenge" autofocus>
        </label>
        <p>
        <label>
            Breite: <input type="text" name="breite">
        </label>
        <p>
        <button type="submit" name="senden">Daten absenden</button>
        <button type="reset">Zurücksetzen</button>
    </form>';
}
 ?>
</body>
</html>