<html>
	<head>
		<title>
			Gluecksspiel
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>
		<?php
			$stufe = 1;
			$gewinn = 1000;
			
			while($stufe <= 5)
			{
				echo "Stufe ", $stufe, ": ", $gewinn, "<br>";
				$gewinn = $gewinn + $gewinn * 0.5;
				$stufe ++;
			}
		?>
	</body>
</html>
