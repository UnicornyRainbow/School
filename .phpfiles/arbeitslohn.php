<html>
<head><title>Ihr Bruttolohn</title><link rel='stylesheet' href='.stylesheet.css'></head>
<body>
<?php

$wochenarbeitszeit=$_GET['wochenarbeitszeit'];

if($wochenarbeitszeit>=60)
{
$wochenarbeitszeit=60;
}

if($wochenarbeitszeit<=40)
{
$bruttolohn=$wochenarbeitszeit*18;
}else
{
$bruttolohn=(($wochenarbeitszeit-40)*22)+(40*18);
}

echo "Sie verdienen ",$bruttolohn," EUR brutto diese Woche<br>";

?>
</body>
</html>
