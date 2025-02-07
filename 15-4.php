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
if (@$_REQUEST['eng1']=="rubbish chute")
	
	{
		echo "<b> 407.Мусоропровод: rubbish chute</b>";
	
		$eng1="rubbish chute";
	}
	else
	{
		echo "407-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="coffe-grinder")
	
	{
		echo "<b> 408.Кофемолка: coffe-grinder</b>";
		$eng2="coffe-grinder";
	}
	else
	{
		echo "408-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="dishwashing machine")
	
	{
		echo "<b> 409.Посудомоячная машина:dishwashing machine</b>";
		$eng3="dishwashing machine";
	}
	else
	{
		echo "409-Неверно.";
	}
	if (@$_REQUEST['eng4']=="DVD player")
	
	{
		echo "<b> 410.DVD-плеер: DVD player</b>";
		$eng4="DVD player";
	}
	else
	{
		echo "410-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="electric razor")
	
	{
		echo "<b> 411.Электробритва:electric razor</b>";
		$eng5="electric razor";
	}
	else
	{
		echo "411-Неверно.";
	}
if (@$_REQUEST['eng6']=="hairdryer")
	
	{
		echo "<b> 412.Фен: hairdryer</b>";
		$eng6="hairdryer";
	}
	else
	{
		echo "412-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="iron")
	
	{
		echo "<b> 413.Утюг: iron</b>";
		$eng7="iron";
	}
	else
	{
		echo "413-неверно";
	}
	
}
?>
<br>
Современные удобства,бытовая техника:

407.iron
408.rubbish chute
409.dishwashing machine
410.coffe-grinder
411.electric razor
412.DVD player
413.hairdryer















































<form action="15-4.php" method="post">
<p>
Мусоропровод:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кофемолка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Посудомоячная машина:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
DVD-плеер:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Электробритва:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Фен:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Утюг:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="rubbish chute" && @$_REQUEST['eng2']=="coffe-grinder" && @$_REQUEST['eng3']=="dishwashing machine" && @$_REQUEST['eng4']=="DVD player" && @$_REQUEST['eng5']=="electric razor" && @$_REQUEST['eng6']=="hairdryer" && @$_REQUEST['eng7']=="iron"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/16-1.php'>16 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>