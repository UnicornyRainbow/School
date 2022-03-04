<html>
	<head>
		<title>
			BMI Rechner
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
			
			Koerpergroesse:
			<input type="float" name="size" size="2">
			<select name="unit">
				<option value="centimeter">cm</option>
				<option value="meter">m</option>
			</select>
			<br>

			<input type="submit" name="send" value="Berechnen"><br><br>

		</form>

		<?php
			if(isset($_GET['send']))
			{
				$size = $_GET['size'];
				$unit = $_GET['unit'];
				
				$size = str_replace(',','.',$size);
				
				if($unit == 'centimeter')
				{$size = $size/100;}
				$weight = 40;
				while($weight <= 200)
				{
					$BMI = number_format(($weight/($size*$size)), 2,'.','');
					echo 'Gewicht: ', $weight, ', BMI: ', $BMI, '<br>';
					$weight = $weight + 10;
				}
			}
		?>
	</body>
</html>
