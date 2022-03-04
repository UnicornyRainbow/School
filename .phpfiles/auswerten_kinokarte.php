<html>
<head><title>Auswertung</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>

<?php

$erwachsene=$_GET['erwachsene'];
$kinder=$_GET['kinder'];
$kinokarte=$_GET['kinokarte'];

$preis_erwachsene=11.00;
$preis_kinder=8.00;
$rabatt_kinokarte=0.1;
if($kinokarte=="familie")
{
    $gesamtpreis=(1-$rabatt_kinokarte)*($erwachsene*$preis_erwachsene+$kinder*$preis_kinder);
}elseif($kinokarte=="keine")
{
    $gesamtpreis=$erwachsene*$preis_erwachsene+$kinder*$preis_kinder;
}else
{
    echo "error<br>";
}

echo "Erwachsene: ",$erwachsene,"<br>";
echo "Kinder: ",$kinder,"<br>";
echo "Kinokarte? ";

if($kinokarte=="familie")
{
    echo "Ja<br>";

}elseif($kinokarte=="keine")
{
    echo "Nein<br>";
}else
{
    echo "error<br>";
}

echo "Gesamtpreis: ",$gesamtpreis,"<br>";

?>

</body>
</html>
