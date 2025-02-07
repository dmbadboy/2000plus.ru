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
if (@$_REQUEST['eng1']=="cowberry")
	
	{
		echo "<b> 491.Брусника: cowberry</b>";
	
		$eng1="cowberry";
	}
	else
	{
		echo "491-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cranberry")
	
	{
		echo "<b> 492.Клюква: cranberry</b>";
		$eng2="cranberry";
	}
	else
	{
		echo "492-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="currant")
	
	{
		echo "<b> 493.Смородина:currant</b>";
		$eng3="currant";
	}
	else
	{
		echo "493-Неверно.";
	}
	if (@$_REQUEST['eng4']=="date")
	
	{
		echo "<b> 494.Финик: date</b>";
		$eng4="date";
	}
	else
	{
		echo "494-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="fig")
	
	{
		echo "<b> 495.Инжир: fig</b>";
		$eng5="fig";
	}
	else
	{
		echo "495.Неверно.";
	}
if (@$_REQUEST['eng6']=="grapefruit")
	
	{
		echo "<b> 496.Грейфрут: grapefruit</b>";
		$eng6="grapefruit";
	}
	else
	{
		echo "496-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="grapes")
	
	{
		echo "<b> 497.Виноград: grapes</b>";
		$eng7="grapes";
	}
	else
	{
		echo "497-неверно";
	}
	
}
?>
<br>
Фрукты:
</b>

491.grapes
492.cranberry
493.cowberry
494.date
495.currant
496.grapefruit
497.fig






















































<form action="18-4.php" method="post">
<p>
Брусника:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Клюква:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Смородина:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Финик:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Инжир:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Грейфрут:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Виноград:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cowberry" && @$_REQUEST['eng2']=="cranberry" && @$_REQUEST['eng3']=="currant" && @$_REQUEST['eng4']=="date" && @$_REQUEST['eng5']=="fig" && @$_REQUEST['eng6']=="grapefruit" && @$_REQUEST['eng7']=="grapes"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/19-1.php'>19 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>