<html>
<head><title>Kosten</title><link rel='stylesheet' href='.stylesheet.css'><head>
<body>
<?php

$verbrauch=$_GET['verbrauch'];          //Watt
$betriebszeit=$_GET['betriebszeit'];    //Stunden
$stromkosten=$_GET['stromkosten'];      //cent/kWh

$gesamtverbrauch=(($verbrauch/1000)*$betriebszeit);  //kWh
$gesamtkosten=(($gesamtverbrauch*$stromkosten)/100); //EUR
echo "Gesamtverbrauch: ",$gesamtverbrauch,"kWh<br>";
echo "Kosten: ",$gesamtkosten,"EUR<br>";

?>
</body>
</html>
