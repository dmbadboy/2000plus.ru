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
if (@$_REQUEST['eng1']=="buttock" || @$_REQUEST['eng1']=="Buttock")
	
	{
		echo "<b>8.Ягодица:buttock </b>";
	
		$eng1="buttock";
	}
	else
	{
		echo "8-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="calf" || @$_REQUEST['eng2']=="Calf")
	
	{
		echo "<b>9.Calf: икра(ноги) </b>";
		$eng2="calf";
	}
	else
	{
		echo "9-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="chest" || @$_REQUEST['eng3']=="Chest")
	
	{
		echo "<b>10.Грудь,грудная клетка: chest</b>";
		$eng3="chest";
	}
	else
	{
		echo "10-Неверно.";
	}
	if (@$_REQUEST['eng4']=="elbow" || @$_REQUEST['eng4']=="Elbow")
	
	{
		echo "<b>11.Локоть: elbow </b>";
		$eng4="elbow";
	}
	else
	{
		echo "11-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="finger" || @$_REQUEST['eng5']=="Finger")
	
	{
		echo "<b>12.Палец(руки): finger </b>";
		$eng5="finger";
	}
	else
	{
		echo "12-Неверно.";
	}
if (@$_REQUEST['eng6']=="foot" || @$_REQUEST['eng6']=="Foot")
	
	{
		echo "<b>13.Нога(ступни): foot </b>";
		$eng6="foot";
	}
	else
	{
		echo "13-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="feet" || @$_REQUEST['eng7']=="Feet")
	
	{
		echo "<b>14.Ноги: feet</b>";
		$eng7="feet";
	}
	else
	{
		echo "14-Неверно.";
	}
	
}
?>
<br>
Части тела:

8.calf 
9.chest
10.finger
11.buttock
12.feet
13.elbow
14.foot
<form action="1-2.php" method="post">
<p>
Ягодица:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Икра(ноги):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Грудь,грудная клетка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Локоть:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Палец(руки):<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Нога:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Ноги:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="buttock" || @$_REQUEST['eng1']=="Buttock" && @$_REQUEST['eng2']=="calf" || @$_REQUEST['eng2']=="Calf" && @$_REQUEST['eng3']=="chest" || @$_REQUEST['eng3']=="Chest" && @$_REQUEST['eng4']=="elbow" || @$_REQUEST['eng4']=="Elbow" && @$_REQUEST['eng5']=="finger" || @$_REQUEST['eng5']=="Finger" && @$_REQUEST['eng6']=="foot" || @$_REQUEST['eng6']=="Foot"&& @$_REQUEST['eng7']=="feet" || @$_REQUEST['eng7']=="Feet"){
echo "<h2>Ты  отлично поработал. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/1-3.php'>1 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>