<html>
	<head>
		<title>Zinseszins</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method=get>
			Startwert:
			<input type='text' name='startwert' value='10'><br>
			Endwert:
			<input type='text' name='endwert' value='20'><br>
			Zinssatz:
			<input type='submit' name='send' value='Berechnen'><br>
		</form><br><br>
		<?php
			if(isset($_GET['send'])){
				$startwert = $_GET['startwert'];
				$endwert = $_GET['endwert'];
				while($startwert <= $endwert){
					$ergebnis = $startwert ** 2;
					echo $startwert, ' * ', $startwert, ' = ', $ergebnis, '<br>';
					$startwert ++;
				}
			}
		?>
	</body>
</html>
