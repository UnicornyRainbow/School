<html>
	<head>
		<title>
			Waehrungsrechner
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

			<input type="text" name="factor">
			Geben sie den aktuellen Dollar Kurs ein<br>

			<input type="text" name="amount">
			Was ist Ihr Geldbetrag?<br>

			<input type="radio" name="direction" value="dollar" checked>
			Euro zu Dollar<br>
			<input type="radio" name="direction" value="euro">
			Dollar zu Euro<br>

			<input type="submit" name="send" value="berechnen"<br><br>

		</form>

		<?php
			if(isset($_GET['send']))
			{
				$factor=$_GET['factor'];
				$direction=$_GET['direction'];
				$amount=$_GET['amount'];

				if($direction == "dollar")
				{
					$amount=$amount*$factor;
				}else
				{
					$amount=$amount/$factor;
				}
				echo "Sie muessen ",$amount," ",$direction," bezahlen<br>";
			}
		?>
	</body>
</html>
