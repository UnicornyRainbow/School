<html>
	<head>
		<title>Margins</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<h2>Margins</h2>
		<?php
			$margins = [
		                "January" => 9000,
		                "February" => 10000,
		                "March" => 10500,
		                "April" => 11000,
		                "May" => 8000,
		                "June" => 7700,
		                "July" => 7000,
		                "August" => 6500,
		                "Septemper" => 8350,
		                "Oktober" => 8600,
		                "November" => 9200,
		                "Dezember" => 11000
		                ];
			
			//all Months
			echo "<h4>Margins of last 12 months:</h4>";
			foreach(array_reverse($margins) as $i => $margin){
			        echo $i, ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
			}
			
			//Average
			echo "<h4>Average margin of last 12 months:</h4>";
			$avg = 0;
			foreach($margins as $margin){
				$avg = $avg + $margin;
			}
			$avg = $avg / count($margins);
			echo number_format($avg, 2, ',', ' '), " EUR<br>";
			
			//+20%
			echo "<h4>Outlier +20%:</h4>";
                        foreach($margins as $i => $margin){
                                if($margin >= ($avg * 1.2)){
                                        echo $i, ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
                                }
			}

                        //-20%
			echo "<h4>Outlier -20%:</h4>";
                        foreach($margins as $i => $margin){
                                if($margin <= ($avg * 0.8)){
                                        echo $i, ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
                                }
			}
		?>
	</body>
</html>
