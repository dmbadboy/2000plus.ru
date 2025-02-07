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
if (@$_REQUEST['eng1']=="beverage/drink")
	
	{
		echo "<b> 428.Напиток: beverage/drink</b>";
	
		$eng1="beverage/drink";
	}
	else
	{
		echo "428-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="soft drink")
	
	{
		echo "<b> 429.Безалкогольный напиток: soft drink</b>";
		$eng2="soft drink";
	}
	else
	{
		echo "429-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="beer")
	
	{
		echo "<b> 430.Пиво:beer</b>";
		$eng3="beer";
	}
	else
	{
		echo "430-Неверно.";
	}
	if (@$_REQUEST['eng4']=="champagne")
	
	{
		echo "<b> 431.Шампанское: champagne</b>";
		$eng4="champagne";
	}
	else
	{
		echo "431-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="coffee")
	
	{
		echo "<b> 432.Кофе:coffee</b>";
		$eng5="coffee";
	}
	else
	{
		echo "432-Неверно.";
	}
if (@$_REQUEST['eng6']=="juice")
	
	{
		echo "<b> 433.Сок: juice</b>";
		$eng6="juice";
	}
	else
	{
		echo "433-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="lemonade")
	
	{
		echo "<b> 434.Лимонад: lemonade</b>";
		$eng7="lemonade";
	}
	else
	{
		echo "434-неверно";
	}
	
}
?>
<br>
Напитки:

428.lemonade
429.beverage/drink
430.beer
431.soft drink
432.coffee
433.champagne
434.juice

















































<form action="16-3.php" method="post">
<p>
Напиток:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Безалкогольный напиток:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пиво:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Шампанское:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Кофе:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сок:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Лимонад:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="beverage/drink" && @$_REQUEST['eng2']=="soft drink" && @$_REQUEST['eng3']=="beer" && @$_REQUEST['eng4']=="champagne" && @$_REQUEST['eng5']=="coffee" && @$_REQUEST['eng6']=="juice" && @$_REQUEST['eng7']=="lemonade"){
echo "<h2>Кто-то сегодня жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/16-4.php'>16 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>