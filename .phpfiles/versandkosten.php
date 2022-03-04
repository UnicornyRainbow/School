<html>
<head><title>Preis incl Versandkosten</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>
<?php

$versandkosten=4;
$bestellbetrag=$_GET['bestellbetrag'];

if($bestellbetrag>=50)
{echo $bestellbetrag,"<br>";}
elseif($bestellbetrag)
{echo $bestellbetrag+4,"<br>";}
else
{echo "error<br>";}

?>
</body>
</html>
