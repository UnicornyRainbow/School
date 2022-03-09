<html>
	<head>
		<title>Zinseszins</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method=get>
			Kapital:
			<input type='text' name='kapital'><br>
			Laufzeit:
			<input type='text' name='laufzeit'>Jahre<br>
			Zinssatz:
			<input type='text' name='zinssatz'>%<br>
			<input type='submit' name='send' value='Berechnen'><br>
		</form><br><br>
		<?php
			if(isset($_GET['send'])){
				$kapital = $_GET['kapital'];
				$laufzeit = $_GET['laufzeit'];
				$zinssatz = $_GET['zinssatz']*0.01;
				$i = 0;
				while($i < $laufzeit){
					$kapital = $kapital + ($zinssatz * $kapital);
					$i ++;
					echo 'Jahr: ', $i,', Kapital: ', $kapital, 'EUR<br>';
				}
			}
		?>
	</body>
</html>
