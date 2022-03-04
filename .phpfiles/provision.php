<html>
<head><title>Provision</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>
<?php

$umsatz=$_GET['umsatz'];
$provision;

if($umsatz>=100000)
{$provision=2;}
elseif($umsatz>=80000)
{$provision=1.5;}
else{$provision=0;}

echo "Es gibt eine Provision von ",$provision,"%<br>";

?>
</body>
</html>
