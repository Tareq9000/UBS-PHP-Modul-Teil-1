<!-- 
Diese Datei sendet die Eingaben im Formular einer E-Mail und überprüft diese.   
Tareq Kattit, 3.5.2019
-->
<!DOCTYPE html>

<html lang="de-ch">
<head>
    <meta charset="utf-8" />
    <title>Formular-Send</title>
	<style>
	body{
		background-color:mediumslateblue;
		text-align: center;
		align-items: center;
	}
	</style>
</head>
<body>
    <?php 
			//Deklarierung der Variablen.
			$vorname = "";
			$nachname = "";
			$email = "";
			$ueber = "";
			$datei = "";
			

			if(isset($_POST['senden'])){
			//Die Werte werden vom vorherigen Formular geholt.
				$vorname = strip_tags($_POST['vorname']);
				$nachname = strip_tags($_POST['nachname']);
				$email = strip_tags($_POST['email']);
				if(isset($_POST['mittel'])){
					$datei = strip_tags($_POST['datei']);
				}
				if(isset($_POST['mittel'])){
					$mittelString = implode(',',$_POST['mittel']);
					$ueber = strip_tags($mittelString);
				}

				//Vormate für die Überprüfung.
				$mailformat = '/@{1}.{1}/';
				$nameformat = '/^[a-z]+$/i';

				//Überprüfung ob alles richig eingegeben worden ist.
				if(! preg_match($nameformat, $vorname)){
					fehlermeldung("Der Vorname ist ungültig!", $nachname, $vorname, $email, $ueber, $datei);

				}
				elseif (! preg_match($nameformat, $nachname)){
					fehlermeldung("Der Nachnname ist ungültig!", $nachname, $vorname, $email, $ueber, $datei);
		
				}
				elseif (! preg_match($mailformat, $email)){
					fehlermeldung("Ihre Mailadresse ist ungültig!", $nachname, $vorname, $email, $ueber, $datei);

				}
				elseif ($datei == null){
					fehlermeldung("Wählen Sie bitte, ob Sie unseren Newsletter abonnieren wollen!", $nachname, $vorname, $email, $ueber, $datei);

				}
				elseif ($ueber == null){
					fehlermeldung("Wählen Sie bitte, welche Informationen sie bestellen wollen!", $nachname, $vorname, $email, $ueber, $datei);

				}
				else{
					//Die Mail wird geschickt.
					mail($email, 'Bestellung Informationsmaterial', " Vorname: ".$vorname."\n\r"." Nachname: ".$nachname."\n\r"." Über was: ".$ueber."\n\r"." Newsletter: ".$datei,"From: info@webpubli.ch\r\nContent-type: text/plain; charset=UTF-8",'-finfo@webpubli.ch');
					echo '<h1>Bestellung von Informationsmaterial</h1><br>';
					echo 'Ihre Mail wurde erfolgreich versendet.<p>';
					echo 'Vorname: '.$vorname.'<br>';
					echo 'Nachnname: '.$nachname.'<br>';
					echo 'Email: '.$email.'<br>';
					echo 'Über was: '.$ueber.'<br>';
					echo 'Newsletter: '.$datei.'<br>';
				}
				
			}
			//Wenn die Überprüfung einen Fehler entdeckt hat, wird die Funktion Fehlermeldung ausgeführt.
		function fehlermeldung($meldung, $nachname, $vorname, $email, $ueber, $datei){

			//Wurde beim Newsletter ja oder nein angehakt.
			$dateija = "";
			$dateinein = "";
			if ($datei == "ja") {
				$dateija = "checked";
			}
			elseif ($datei == "nein") {
				$dateinein = "checked";
			}
			
			//Welche Checkbox wurde schon angehakt
			$php = "";
			$js = "";
			$css = "";
			if($ueber == 'PHP'){
				$php = "checked";
			}
			if($ueber == 'CSS'){
				$css = "checked";
			}
			if($ueber == 'JavaScript'){
				$js = "checked";
			}
			if($ueber == 'PHP,CSS'){
				$php = "checked";
				$css = "checked";
			}
			if($ueber == 'PHP,JavaScript'){
				$php = "checked";
				$js = "checked";
			}
			if($ueber == 'JavaScript,CSS'){
				$js = "checked";
				$css = "checked";
			}
			if($ueber == 'PHP,JavaScript,CSS'){
				$php = "checked";
				$js = "checked";
				$css = "checked";
			}

			//Ausgabe eines neuen Formular.
			echo '
				<form method="post" action="form-send.php">
					<h1>Bestellung von Informationsmaterial</h1>
					<p>
						'.$meldung.'
					<p>
						<label>
							Nachname
							<input type="text" name="nachname" value="'.$nachname.'" />

						</label>
					</p>
					<p>
						<label>
							Vorname
							<input type="text" name="vorname" value="'.$vorname.'"/>

						</label>
					</p>
					<p>
						<label>
							Email
							<input type="text" name="email" value="'.$email.'" placeholder="name@example.com"/>
						</label>
					</p>
					<fieldset id="f">
						<legend id="legend">Ich bestelle Informationen zu</legend>
						<p>
							<label>
								<input type="checkbox" name="mittel[]" value="PHP" '.$php.' />
								PDF
							</label>
						</p>
						<p>
							<label>
								<input type="checkbox" name="mittel[]" value="JavaScript" '.$js.' />
								ePUB
							</label>
						</p>

						<p>
							<label>
								<input type="checkbox" name="mittel[]" value="CSS" '.$css.' />
								CSS
							</label>
						</p>

					</fieldset>
					<fieldset id="f">
						<legend id="legend">Ich abonniere den Newsletter</legend>
						<p>
							<label>
								<input type="radio" name="datei" value="ja" '.$dateija.' />
								Ja
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="datei" value="nein" '.$dateinein.' />
								Nein
							</label>
						</p>

					</fieldset>

					<p>
						<input type="submit" name="senden" value="Senden" />
					</p>

				</form>';

		}
    ?>

</body>
</html>