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
if (@$_REQUEST['eng1']=="skirt")
	
	{
		echo "<b> 253.Юбка: skirt</b>";
	
		$eng1="skirt";
	}
	else
	{
		echo "253-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="sweater")
	
	{
		echo "<b> 254.Свитар: sweater</b>";
		$eng2="sweater";
	}
	else
	{
		echo "254-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="swimsuit")
	
	{
		echo "<b> 255.Купальник:swimsuit</b>";
		$eng3="swimsuit";
	}
	else
	{
		echo "255-Неверно.";
	}
	if (@$_REQUEST['eng4']=="tights")
	
	{
		echo "<b> 256.Колготки: tights</b>";
		$eng4="tights";
	}
	else
	{
		echo "256-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="trousers")
	
	{
		echo "<b> 257.Брюки,штаны:trousers</b>";
		$eng5="trousers";
	}
	else
	{
		echo "257-Неверно.";
	}
if (@$_REQUEST['eng6']=="t-shirt")
	
	{
		echo "<b> 258.Футболка: t-shirt</b>";
		$eng6="t-shirt";
	}
	else
	{
		echo "258-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="waistcoat")
	
	{
		echo "<b> 259.Жилет: waistcoat</b>";
		$eng7="waistcoat";
	}
	else
	{
		echo "259-неверно";
	}
	
}
?>
<br>
Одежда:

253.waistcoat
254.swimsuit
255.sweater
256.tights
257.t-shirt
258.trousers
259.skirt































<form action="10-2.php" method="post">
<p>
Юбка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Свитер:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Купальник:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Колготки:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Брюки. штаны:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Футболка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Жилет:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="skirt" && @$_REQUEST['eng2']=="sweater" && @$_REQUEST['eng3']=="swimsuit" && @$_REQUEST['eng4']=="tights" && @$_REQUEST['eng5']=="trousers" && @$_REQUEST['eng6']=="t-shirt" && @$_REQUEST['eng7']=="waistcoat"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/10-3.php'>10 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>