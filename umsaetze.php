<html>
	<head>
		<title>Margins</title>
		<link rel=stylesheet href=.stylesheet.css>
	</head>
	<body>
		<h2>Margins</h2>
		<?php
			$margins = [9000, 10000, 10500, 11000, 8000, 7700, 7000, 6500, 8350, 8600, 9200, 11000];
			$months = ["January", "February", "March", "April", "May", "June", "July", "August", "Septemper", "Oktober", "November", "Dezember"];
			
			//all Months
			echo "<h4>Margins of last 12 months:</h4>";
			foreach(array_reverse($margins) as $i => $margin){
			        $i = count($margins) - 1 - $i;
			        echo $months[$i], ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
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
                                        echo $months[$i], ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
                                }
			}

                        //-20%
			echo "<h4>Outlier -20%:</h4>";
                        foreach($margins as $i => $margin){
                                if($margin <= ($avg * 0.8)){
                                        echo $months[$i], ": ", number_format($margin, 2, ',', ' '), " EUR<br>";
                                }
			}
		?>
	</body>
</html>
