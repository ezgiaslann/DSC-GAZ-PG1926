<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set('Europe/Istanbul');
echo ("<br>");

echo ("<br>");
echo 'Saat: ' . date('H:i');

echo "<br>";

$t = date("H:i");

if ($t > "06:00" && $t<"10:00") {
    alert("Günaydın");
}
elseif($t>"10:00" && $t<"17:00")
{
    alert("İyi Günler");
}
elseif($t>"17:00" && $t<"20:00")
{
    alert("İyi Akşamlar");
}
elseif($t>"20:00" && $t<"00:00")
{
    alert("İyi Geceler");
}
else
{
    alert("Esenlikler Dilerim");
}

function alert($t) {
    echo "<script type='text/javascript'>alert('$t');</script>";
}

?
</body>
</html>