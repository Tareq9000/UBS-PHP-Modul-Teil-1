<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>

</head>
<body>
    <?php
    if(isset($_POST['submit'])){
    if(isset($_POST['radio'])){
    if(isset($_POST['datei'])){
    if(isset($_POST['lehrmittel'])){
        $mail = $_POST['mail'];
        $radio = $_POST['radio'];
        $datei = $_POST['datei'];
        $lehrmittel = $_POST['lehrmittel'];
        
        $radiostr = implode(', ', $radio);
        $dateistr = implode(', ', $datei);
        $lehrmittelstr = implode(', ', $lehrmittel);

        echo "<p>E-Mail: ".$mail."<p>Sprache: ".$radiostr. "<p>Datei: ".$dateistr. "<p>Lehrmittel: ".$lehrmittelstr;
    }}}}
    ?>
    <form method="post" action="mail.php">
    <fieldset>
        <legend>Mail</legend>
        <label>
            <p>E-Mail: <input type="mail" name="mail" autofocus required/>
        </label>
        </fieldset>
        <fieldset>
        <legend>Sprache</legend>
        <label>
            <p><input type="radio" name="radio[]" value="deutsch"> Deutsch
            <p><input type="radio" name="radio[]" value="englisch"> English
            <p><input type="radio" name="radio[]" value="französisch"> Francais
        </label>
        </fieldset>
        <fieldset>
        <legend>Datei-Format</legend>
        <label>
            <p><input type="radio" name="datei[]" value="PDF"> PDF
            <p><input type="radio" name="datei[]" value="ePUB"> ePUB
        </label>
        </fieldset>
        <fieldset>
        <legend>Lehrmittel</legend>
        <label>
            <p><input type="checkbox" name="lehrmittel[]" value="HTML5 Handbuch"> HTML5 Handbuch
            <p><input type="checkbox" name="lehrmittel[]" value="Einstieg in PHP 5.5 und MySQL 5.6"> Einstieg in PHP 5.5 und MySQL 5.6
            <p><input type="checkbox" name="lehrmittel[]" value="JavaScript, Das umfassende Referenzwerk"> JavaScript, Das umfassende Referenzwerk
        </label>
        </fieldset>
        <fieldset>
        <legend>Zahlungsart</legend>
        <label>
            <section name="zahlung">
                <option name="">keineAuswahl</option>
                <option name="Barzahlung">
                <option value="Kreditkarte">
                <option value="Rechnung">
            </section>
        </label>
        </fieldset>
        <p><button type="submit" name="submit">Absenden</button>
        
    </form>
</body>
</html>