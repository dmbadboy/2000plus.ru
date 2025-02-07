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
if (@$_REQUEST['eng1']=="hand" || @$_REQUEST['eng1']=="Hand")
	
	{
		echo "<b>15.Рука: hand</b>";
	
		$eng1="hand";
	}
	else
	{
		echo "15-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="head" || @$_REQUEST['eng2']=="Head")
	
	{
		echo "<b>16.head: голова </b>";
		$eng2="head";
	}
	else
	{
		echo "16-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="heel" || @$_REQUEST['eng3']=="Heel")
	
	{
		echo "<b>17.Пятка: heel</b>";
		$eng3="heel";
	}
	else
	{
		echo "17-Неверно.";
	}
	if (@$_REQUEST['eng4']=="hip" || @$_REQUEST['eng4']=="Hip)
	
	{
		echo "<b>18.Бедро, бок: hip </b>";
		$eng4="hip";
	}
	else
	{
		echo "18-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="knee" || @$_REQUEST['eng5']=="Knee")
	
	{
		echo "<b>19.Колено: knee</b>";
		$eng5="knee";
	}
	else
	{
		echo "19-Неверно.";
	}
if (@$_REQUEST['eng6']=="leg" || @$_REQUEST['eng6']=="Leg")
	
	{
		echo "<b>20.Нога: leg</b>";
		$eng6="leg";
	}
	else
	{
		echo "20-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="nail" || @$_REQUEST['eng7']=="Nail")
	
	{
		echo "<b>21.Ноготь: nail</b>";
		$eng7="nail";
	}
	else
	{
		echo "21-неверно";
	}
	
}
?>
<br>
Части тела:
15.knee
16.hand
17.heel
18.head
19.nail
20.hip
21.leg

<form action="1-3.php" method="post">
<p>
Рука(кисть):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Голова:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пятка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бедро,бок:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Колено:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Нога:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Ноготь:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="hand" || @$_REQUEST['eng1']=="Hand" && @$_REQUEST['eng2']=="head" || @$_REQUEST['eng2']=="Head" && @$_REQUEST['eng3']=="heel" || @$_REQUEST['eng3']=="Heel" && @$_REQUEST['eng4']=="hip" || @$_REQUEST['eng4']=="Hip" && @$_REQUEST['eng5']=="knee" || @$_REQUEST['eng5']=="Knee" && @$_REQUEST['eng6']=="leg" || @$_REQUEST['eng6']=="Leg" && @$_REQUEST['eng7']=="nail" || @$_REQUEST['eng7']=="Nail"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/1-4.php'>1 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>