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
if (@$_REQUEST['eng1']=="blanket")
	
	{
		echo "<b> 372.Одеяло: blanket</b>";
	
		$eng1="blanket";
	}
	else
	{
		echo "372-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="chest of drawers")
	
	{
		echo "<b> 373.Комод: chest of drawers</b>";
		$eng2="chest of drawers";
	}
	else
	{
		echo "373-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="cover")
	
	{
		echo "<b> 374.Покрывало:cover</b>";
		$eng3="cover";
	}
	else
	{
		echo "374-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cover blanket")
	
	{
		echo "<b> 375.Пододеяльник: cover blanket</b>";
		$eng4="cover blanket";
	}
	else
	{
		echo "375-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="dressing-table")
	
	{
		echo "<b> 376.Туалетный столик:dressing-table</b>";
		$eng5="dressing-table";
	}
	else
	{
		echo "376-Неверно.";
	}
if (@$_REQUEST['eng6']=="lamp")
	
	{
		echo "<b> 377.Лампа: lamp</b>";
		$eng6="lamp";
	}
	else
	{
		echo "377-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="night-lamp")
	
	{
		echo "<b> 378.Ночник: night-lamp</b>";
		$eng7="night-lamp";
	}
	else
	{
		echo "378-неверно";
	}
	
}
?>
<br>
Cпальня:



365.night-lamp
366.chest of drawers
367.blanket
368.blanket cover
369.cover
370.lamp
371.dressing-table











































<form action="14-3.php" method="post">
<p>
Одеяло:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Комод:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Покрывало:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Пододеяльник:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Туалетный столик:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Лампа:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Ночник:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="blanket" && @$_REQUEST['eng2']=="chest of drawers" && @$_REQUEST['eng3']=="cover" && @$_REQUEST['eng4']=="cover blanket" && @$_REQUEST['eng5']=="dressing-table" && @$_REQUEST['eng6']=="lamp" && @$_REQUEST['eng7']=="night-lamp"){
echo "<h2>В точку. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/14-4.php'>14 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>