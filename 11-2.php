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
if (@$_REQUEST['eng1']=="chiffon")
	
	{
		echo "<b> 281.Шифон: chiffon</b>";
	
		$eng1="chiffon";
	}
	else
	{
		echo "281-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cotton")
	
	{
		echo "<b> 282.Хлопок: cotton</b>";
		$eng2="cotton";
	}
	else
	{
		echo "282-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="flax")
	
	{
		echo "<b> 283.Льняная ткань:flax</b>";
		$eng3="flax";
	}
	else
	{
		echo "283-Неверно.";
	}
	if (@$_REQUEST['eng4']=="jersey")
	
	{
		echo "<b> 284.Джерси: jersey</b>";
		$eng4="jersey";
	}
	else
	{
		echo "284-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="lace")
	
	{
		echo "<b> 285.Кружево:lace</b>";
		$eng5="lace";
	}
	else
	{
		echo "285-Неверно.";
	}
if (@$_REQUEST['eng6']=="leather")
	
	{
		echo "<b> 286.Кожа: leather</b>";
		$eng6="leather";
	}
	else
	{
		echo "286-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="running shoes/trainers")
	
	{
		echo "<b> 287.Парча: running shoes/trainers</b>";
		$eng7="running shoes/trainers";
	}
	else
	{
		echo "287-неверно";
	}
	
}
?>
<br>
Ткани,обувь:

281.running shoes/trainers
282.chiffon
283.leather
284.lace
285.flax
286.cotton
287.jersey



































<form action="11-2.php" method="post">
<p>
Шифон:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Хлопок:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Льняная ткань:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Джерси:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Кружево:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кожа:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Кроссовки:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="chiffon" && @$_REQUEST['eng2']=="cotton" && @$_REQUEST['eng3']=="flax" && @$_REQUEST['eng4']=="jersey" && @$_REQUEST['eng5']=="lace" && @$_REQUEST['eng6']=="leather" && @$_REQUEST['eng7']=="running shoes/trainers"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/11-3.php'>11 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>