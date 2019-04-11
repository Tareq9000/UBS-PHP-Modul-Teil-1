<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
<style>
body{
border: 4px solid black;
}
</style>
</head>
<body>
    <?php
    if(isset($_GET['senden'])){
        echo "Vorname: ".$_GET['vorname']."<p>";
        echo "Nachname: ".$_GET['nachname']."<p>";
        echo "Wohnort: ".$_GET['wohnort']."<p>";
    
    }else{
   
       echo '<h2>Formular mit der GET-Methode versenden</h2>
    <form method="get" action="formular.php">
        
        <label>
            Vorname: <input type="text" name="vorname">
        </label>
        <p>
        <label>
            Nachname: <input type="text" name="nachname">
        </label>
        <p>
        <label>
            Wohnort: <input type="text" name="wohnort">
        </label>
        <p>
        <button type="submit" name="senden">Daten absenden</button>
        <button type="reset">Zurücksetzen</button>
    </form>';
}
 ?>
</body>
</html>