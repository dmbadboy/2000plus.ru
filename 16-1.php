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
if (@$_REQUEST['eng1']=="mincer")
	
	{
		echo "<b> 414.Мясорубка: mincer</b>";
	
		$eng1="mincer";
	}
	else
	{
		echo "414-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="microware oven")
	
	{
		echo "<b> 415.Кофемолка: microware oven</b>";
		$eng2="microware oven";
	}
	else
	{
		echo "415-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="mixer")
	
	{
		echo "<b> 416.Миксер:mixer</b>";
		$eng3="mixer";
	}
	else
	{
		echo "416-Неверно.";
	}
	if (@$_REQUEST['eng4']=="radio")
	
	{
		echo "<b> 417.Радио: radio</b>";
		$eng4="radio";
	}
	else
	{
		echo "417-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="refrigerator/fridge")
	
	{
		echo "<b> 418.Холодилькик:refrigerator/fridge</b>";
		$eng5="refrigerator/fridge";
	}
	else
	{
		echo "418-Неверно.";
	}
if (@$_REQUEST['eng6']=="remote control")
	
	{
		echo "<b> 419.Пульт дистанционного управления: remote control</b>";
		$eng6="remote control";
	}
	else
	{
		echo "419-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="sewing machine")
	
	{
		echo "<b> 420.Утюг: sewing machine</b>";
		$eng7="sewing machine";
	}
	else
	{
		echo "420-неверно";
	}
	
}
?>
<br>
Современные удобства,бытовая техника:

414.sewing machine
415.mincer
416.mixer
417.microware oven
418.refrigerator/fridge
419.radio
420.remote control
















































<form action="16-1.php" method="post">
<p>
Мясорубка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Микроволновая печь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Миксер:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Радио:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Холодильник:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Пульт дистанционного управления:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Швейная машина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="mincer" && @$_REQUEST['eng2']=="microware oven" && @$_REQUEST['eng3']=="mixer" && @$_REQUEST['eng4']=="radio" && @$_REQUEST['eng5']=="refrigerator/fridge" && @$_REQUEST['eng6']=="remote control" && @$_REQUEST['eng7']=="sewing machine"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/16-2.php'>16 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>