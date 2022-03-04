<html>
	<head>
		<title>
			Ausgabe Broca-Formel
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>
		<?php
			$size=$_GET['size'];
			$gender=$_GET['gender'];
			$femalepercent=0.15;
			$malepercent=0.1;

			$bruttoweight=$size-100;

			if($gender=="weiblich"){
				$nettoweight=$bruttoweight-($bruttoweight*$femalepercent);
			}else{
				$nettoweight=$bruttoweight-($bruttoweight*$malepercent);
			}

			echo "<b>Broca-Formel - Berechnungsergebnisse</b><br><br>";
			echo "Geschlecht: ";

			if($gender=="weiblich")
			{
				echo "w<br>";
			}else
			{
				echo "m<br>";
			}

			echo "Koerpergroesse: ",$size," cm<br>";
			echo "Normalgewicht: ",$bruttoweight," kg<br>";
			echo "Idealgewicht: ",$nettoweight," kg<br>";

		?>
	</body>
</html>
