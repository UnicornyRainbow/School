<html>
<head><title>Preis</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>
<b>Gesamtpreis:</b><br><br>

<?php

$preis_erwachsene=11.00;
$preis_kinder=8.00;
$erwachsene=$_GET['erwachsene'] ;
$kinder=$_GET['kinder'] ;

$gesamtpreis=number_format(($erwachsene*$preis_erwachsene)+($kinder*$preis_kinder), 2, ".", " ");

echo "Tickets:<br>";
echo "Anzahl Erwachsene: ",$erwachsene,"<br>";
echo "Anzahl Kinder: ",$_GET['kinder'],"<br>";
echo "Gesamtpreis: ",$gesamtpreis,"€<br>";

?>

</body>
</html>
