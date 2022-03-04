<html>
<head><title>Preis</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>
<?php

$steuersatz=0.19;
$nettopreis=$_GET['netto'];

$steuern=($nettopreis*$steuersatz);
$bruttopreis=($nettopreis*(1+$steuersatz));

echo "Bruttopreis: ",$bruttopreis,"EUR<br>";
echo "Davon Steuern: ",$steuern,"EUR<br>";

?>
</body>
</html>
