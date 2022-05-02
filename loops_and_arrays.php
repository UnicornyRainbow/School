<html>
	<head>
		<title>Kinokarte</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<h2>Preis nach Kategorie</h2>
		<?php
			$preisstufe = array(11, 12, 13.5);
			$i = 0;
			while($i < count($preisstufe)){
				echo "Kategorie ", $i + 1, ": ", number_format($preisstufe[$i],2,',',''), "EUR<br>";
				$i++;
			}
			echo "<br>";
			for($x = 0; $x < count($preisstufe); $x++){
				echo "Kategorie ", $x + 1, ": ", number_format($preisstufe[$x],2,',',''), "EUR<br>";
			}
			echo "<br>";
			foreach($preisstufe as $x => $a){
				echo "Kategorie ", $x + 1, ": ", number_format($a,2,',',''), "EUR<br>";
			}
		?>
	</body>
</html>
