<html>
	<head>
		<title>Temperaturen</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<h2>Temperaturen</h2>
		<?php
			$temps = array(8, 12, 14, 10, 15, 20, 22);
			$max;
			$min;
			$avg = 0;
			foreach($temps as $i => $temp){
				if($i == 0){
				        $max = $temp;
				        $min = $temp;
				} elseif($temp > $max){
					$max = $temp;
				} elseif($temp < $min){
					$min = $temp;
				}
				$avg = $avg + $temp;
			}
			$avg = $avg / count($temps);
			echo "<br><h4>Maximale Temperatur:<h4>";
			echo number_format($max, 2, ',', ' '), "C<br>";
			echo "<br><h4>Minimale Temperatur:<h4>";
			echo number_format($min, 2, ',', ' '), "C<br>";
			echo "<br><h4>Durchschnitts Temperatur:<h4>";
			echo number_format($avg, 2, ',', ' '), "C<br>";
		?>
	</body>
</html>
