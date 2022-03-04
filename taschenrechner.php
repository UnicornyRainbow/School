<html>
	<head>
		<title>
			Taschenrechner
		</title>
		<link rel='stylesheet' href='.stylesheet.css'>
	</head>
	<body>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

			<input type="float" name="operandLeft" size="2">
			<select name="calcType">
				<option value="Multiply">Multiply</option>
				<option value="Divide">Divide</option>
				<option value="Add">Add</option>
				<option value="Substract">Substract</option>
			</select>
			<input type="float" name="operandRight" size="2">
			<br>

			<input type="submit" name="send" value="Berechnen"><br><br>

		</form>

		<?php
			if(isset($_GET['send']))
			{
				$operandLeft=$_GET['operandLeft'];
				$operandRight=$_GET['operandRight'];
				$calcType=$_GET['calcType'];
				
				$operandLeft = str_replace(',','.',$operandLeft);
				$operandRight = str_replace(',','.',$operandRight);
				
				if($calcType=='Multiply')
				{$result=$operandLeft*$operandRight;}
				if($calcType=='Divide')
				{$result=$operandLeft/$operandRight;}
				if($calcType=='Add')
				{$result=$operandLeft+$operandRight;}
				if($calcType=='Substract')
				{$result=$operandLeft-$operandRight;}
				echo $result;
			}
		?>
	</body>
</html>
