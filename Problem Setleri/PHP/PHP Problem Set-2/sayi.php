<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sayi</title>
	</head>
	<body>
    <?php
$i=0; 
$toplam=0; 
while($toplam<=3) 
{
	$i++; 
	$itoplam=0;
	for($k=1;$k<$i;$k++) 
	{
		
		if($i  % $k == 0) //Sayi, sayinin tam böleni
		{
			$itoplam+=$k; //Bölünenlerin toplamına ekle
		}
	}
	if($itoplam==$i) 
	{
		echo "$i <br />";
		$toplam++;
	}
}
?>
	</body>
</html>

<html>
<head>
<title></title>
</head>
<body>
<form action="veri.php" method="post">
<input type="number" name="ad" placeholder="Sayı giriniz : " required>
<input type="submit" value="Gönder">
</form>
</body>
</html>