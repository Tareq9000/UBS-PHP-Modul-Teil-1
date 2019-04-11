<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
<style>
td,tr{
border: 1px solid black;
}
table{
border: 4px solid black;
}
th{
border: 2px solid black;
}
</style>
</head>
<body>
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'buecher';
//Verbindung herstellen
$dsn = 'mysql:host=' . $host . ';dbname=' . $database;

$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

$db = new PDO($dsn, $user, $password, $options);
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_NUM);

//Select Befehl
$query = "SELECT * FROM `buch`";

// Daten von der Datenbank holen
$result = $db -> query($query);

// jeden Datensatz behandeln (z.B. anzeigen) in einer Tabelle ausgeben
echo "<table><th>ID</th><th>Name</th><th>Isbn</th><th>Preis</th>";
while($row = $result -> fetch()){
    echo "<tr>";
    foreach($row as $s){
    echo "<td>";
    echo $s;
    echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
$result = NULL;
$db = NULL;

?>
</body>
</html>