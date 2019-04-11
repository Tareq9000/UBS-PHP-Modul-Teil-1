<?php
/*
Witzweb, Index-Seite
*/

header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-CH" xml:lang="de-CH">
<head>
	<title>Die ultimativen Witzseiten</title>
	<link href="layout.css" type="text/css" rel="Stylesheet" />
</head>
<div id="wrapper">
<header>
<?php
include("include/header.php");
?>
</header>

<body>
<?php
include("include/navigation.php");

?>
<section class="zentriert">
	<h1>Die ultimativen Witzseiten</h1>
	
	<img src="images/intro.jpg" width="200" height="220" border="0" alt="Cartoon: Werbung am Telefon">
</section>
</body>

<footer>
<?php
include("include/footer.php");
?>
</footer>

</html>
