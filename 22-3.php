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
if (@$_REQUEST['eng1']=="market")
	
	{
		echo "<b> 596.Рынок: marketr</b>";
	
		$eng1="market";
	}
	else
	{
		echo "596-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="match")
	
	{
		echo "<b> 597.Подходить, соответствовать (под пару, по цвету, форме): match</b>";
		$eng2="match";
	}
	else
	{
		echo "597-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="shop")
	
	{
		echo "<b> 598.Магазин :shop</b>";
		$eng3="shop";
	}
	else
	{
		echo "598-Неверно.";
	}
	if (@$_REQUEST['eng4']=="butcher's shop")
	
	{
		echo "<b> 599.Мясной магазин: butcher's shop</b>";
		$eng4="butcher's shop";
	}
	else
	{
		echo "599-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="fishmonger's shop")
	
	{
		echo "<b> 600.Рыбный магазин: fishmonger's shop";
		$eng5="fishmonger's shop";
	}
	else
	{
		echo "600.Неверно.";
	}
if (@$_REQUEST['eng6']=="fruiterer's shop")
	
	{
		echo "<b> 601.Фруктовый магазин: fruiterer's shop</b>";
		$eng6="fruiterer's shop";
	}
	else
	{
		echo "601-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="greengrocer's shop")
	
	{
		echo "<b> 602.Овощной магазин: greengrocer's shop</b>";
		$eng7="greengrocer's shop";
	}
	else
	{
		echo "602-неверно";
	}
	
}
?>
<br>
Магазины и отделы:
</b>










596.match
597.market
598.shop
599.fruiterer's shop
600.fishmonger's shop
601.butcher's shop
602.greengrocer's shop






















































+
<form action="22-3.php" method="post">
<p>
Рынок:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Подходить, соответствовать (под пару, по цвету, по форме):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Магазин:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Мясной магазин:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Рыбный магазин:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Фруктовый магазин:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Овощной магазин:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="market" && @$_REQUEST['eng2']=="match" && @$_REQUEST['eng3']=="shop" && @$_REQUEST['eng4']=="butcher's shop" && @$_REQUEST['eng5']=="fishmonger's shop" && @$_REQUEST['eng6']=="fruiterer's shop" && @$_REQUEST['eng7']=="greengrocer's shop"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/22-4.php'>22 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>