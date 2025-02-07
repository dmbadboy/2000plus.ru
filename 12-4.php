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
if (@$_REQUEST['eng1']=="bread-basket")
	
	{
		echo "<b> 323.Корзина для хлеба: bread-basket</b>";
	
		$eng1="bread-basket";
	}
	else
	{
		echo "323-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cooker/stove")
	
	{
		echo "<b> 324.Плитп, печь: cooker/stove</b>";
		$eng2="cooker/stove";
	}
	else
	{
		echo "324-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="cup")
	
	{
		echo "<b> 325.Чашка:cup</b>";
		$eng3="cup";
	}
	else
	{
		echo "325-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cupboard")
	
	{
		echo "<b> 326.Шкаф для посуды: cupboard</b>";
		$eng4="cupboard";
	}
	else
	{
		echo "326-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="dinner-service-set")
	
	{
		echo "<b> 327.Столовый сервиз:dinner-service-set</b>";
		$eng5="dinner-service-set";
	}
	else
	{
		echo "327-Неверно.";
	}
if (@$_REQUEST['eng6']=="fork")
	
	{
		echo "<b> 328.Вилка: fork</b>";
		$eng6="fork";
	}
	else
	{
		echo "328-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="glass")
	
	{
		echo "<b> 329.Бокал,стакан, рюмка: glass</b>";
		$eng7="glass";
	}
	else
	{
		echo "329-неверно";
	}
	
}
?>
<br>
Кухня:

323.glass
324.cooker/stove
325.bread-basket
326.dinner-service-set
327.cupboard
328.cup
329.fork







































<form action="12-4.php" method="post">
<p>
Корзина для хлеба:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Плита,печь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Чашка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Шкаф для посуды:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Столовый сервиз:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Вилка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Бокал,стакан, рюмка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bread-basket" && @$_REQUEST['eng2']=="cooker/stove" && @$_REQUEST['eng3']=="cup" && @$_REQUEST['eng4']=="cupboard" && @$_REQUEST['eng5']=="dinner-service-set" && @$_REQUEST['eng6']=="fork" && @$_REQUEST['eng7']=="glass"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/13-1.php'>13 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>