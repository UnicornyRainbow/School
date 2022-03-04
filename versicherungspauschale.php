<html>
	<head>
		<title>
			Versicherungspauschale
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

			Bitte geben sie Ihren Bestellwert ein:
			<input type="text" name="bestellwert" size="3">
			EUR
			<br><br>

			Versicherungspauschale berechnen:
			<br>
			<input type="submit" name="send" value="Berechnen"><br>
		</form>
		<br><br>

		<?php
			if(isset($_GET['send']))
			{
				$pauschaleProzent=0.025;
				$bestellwert=$_GET['bestellwert'];

				$pauschale=$bestellwert*$pauschaleProzent;
				$gesamtpreis=$bestellwert+$pauschale;

				echo "Bestellwert: ",$bestellwert,"<br>";
				echo "Versicherungspauschale: ",$pauschale,"<br>";
				echo "Gesamt zu zahlen: ",$gesamtpreis,"<br>";
			}
		?>

	</body>
</html>
