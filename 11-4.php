<!DOCTYPE html>
<html lang="ru">

<head>
<title>Угадай слово.</title>
<link rel="stylesheet" href="/style/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="decription" content="Освой 2000 самых распространнёных слов в английском языке."/>
<meta name="keywords" content="английский язык, наиболее употребляемые слова"/>
</head>
<body>
<?php

echo"<p class='main'>Угадай слово.</p>";
echo "<p class='title'>Освой 2000 слов за 40 дней.</p>";
echo "<p class='title2'>Правила просты: дан список слов и подбери ключик к каждому.</p>";
if (@$_REQUEST['OK']){
if (@$_REQUEST['eng1']=="wool")
	
	{
		echo "<b> 295.Шерсть: wool</b>";
	
		$eng1="wool";
	}
	else
	{
		echo "295-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="attic")
	
	{
		echo "<b> 296.Мансарда,чердак: attic</b>";
		$eng2="attic";
	}
	else
	{
		echo "296-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="balcony")
	
	{
		echo "<b> 297.Балкон:balcony</b>";
		$eng3="balcony";
	}
	else
	{
		echo "297-Неверно.";
	}
	if (@$_REQUEST['eng4']=="block of flats")
	
	{
		echo "<b> 298.Многоквартирный дом: block pf flats</b>";
		$eng4="block of flats";
	}
	else
	{
		echo "298-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="cellar")
	
	{
		echo "<b> 299.Подвал,погреб:cellar</b>";
		$eng5="cellar";
	}
	else
	{
		echo "299-Неверно.";
	}
if (@$_REQUEST['eng6']=="cottage")
	
	{
		echo "<b> 300.Загородный дом,коттедж: cottage</b>";
		$eng6="cottage";
	}
	else
	{
		echo "300-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="door")
	
	{
		echo "<b> 301.Дверь: door</b>";
		$eng7="door";
	}
	else
	{
		echo "301-неверно";
	}
	
}
?>
<br>
Ткани,жилище:

295.door
296.wool
297.balcony
298.cellar
299.block of flats
300.attic
301.cottage




































<form action="11-4.php" method="post">
<p>
Шерсть:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Мансарда,чердак:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Балкон:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Многоквартирный дом:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Подвал,погреб:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Загородный дом,коттедж:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Дверь:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="wool" && @$_REQUEST['eng2']=="attic" && @$_REQUEST['eng3']=="balcony" && @$_REQUEST['eng4']=="block of flats" && @$_REQUEST['eng5']=="cellar" && @$_REQUEST['eng6']=="cottage" && @$_REQUEST['eng7']=="door"){
echo "<h2>Ты в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/12-1.php'>12 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>