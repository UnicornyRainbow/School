<html>
<head>
    <title>Serverraum</title>
    <link rel='stylesheet' href='.stylesheet.css'>
</head>
<body>

<?php

$usage = 18000;         //kWh
$price = 0.185;         //€
$baseprice = 24.95;     //€
$cost;                  //€

$cost=cost($usage,$price,$baseprice);
output($cost);

function cost($usage,$price,$baseprice) {

    $cost;

    $cost=($usage*$price)+($baseprice*12);
    return $cost;

}

function output($cost) {

    echo "Cost per year: " , $cost , "\n";

}

?>

</body>
</html>
