<?php
/*
Witzweb, Cartoon

Version 2.0, 05.10.2010, Pius Senn
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
	<h1>Cartoons</h1>
	
	<p class="cartoon"><img border="0" src="images/babies.gif" width="300" height="176"></p>
	
	<p class="cartoon"><img border="0" src="images/partners.gif" width="200" height="208"></p>
</section>
</body>

<footer>
<?php
include("include/footer.php");
?>
</footer>
</div>
</html>