<html>
	<head>
		<title>Quartalumsaetze</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<h2>Quartalumsaetze</h2>
		<?php
			$umsaetze = array(12000, 14000, 10000, 15000);
			$max = 0;
			foreach($umsaetze as $i => $x){
				echo $i + 1, ". Quartal: ", number_format($x, 2, ',', ' '), " EUR<br>";
				if($x > $max){
					$max = $x;
				}
			}
			echo "<br><h4>Maximaler Umsatz:<h4>";
			echo number_format(max($umsaetze), 2, ',', ' '), "EUR<br>";
			echo "<br><h4>Eigener Maximaler Umsatz:<h4>";
			echo number_format($max, 2, ',', ' '), "EUR<br>";
		?>
	</body>
</html>
