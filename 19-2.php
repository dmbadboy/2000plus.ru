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
if (@$_REQUEST['eng1']=="plum")
	
	{
		echo "<b> 505.Слива: plum</b>";
	
		$eng1="plum";
	}
	else
	{
		echo "505-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="pomegranate")
	
	{
		echo "<b> 506.Гранат: pomegranate</b>";
		$eng2="pomegranate";
	}
	else
	{
		echo "506-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="peach")
	
	{
		echo "<b> 507.Персик:peach</b>";
		$eng3="peach";
	}
	else
	{
		echo "507-Неверно.";
	}
	if (@$_REQUEST['eng4']=="pear")
	
	{
		echo "<b> 508.Груша: pear</b>";
		$eng4="pear";
	}
	else
	{
		echo "508-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="persimmon")
	
	{
		echo "<b> 509.Хурма: persimmon</b>";
		$eng5="persimmon";
	}
	else
	{
		echo "509.Неверно.";
	}
if (@$_REQUEST['eng6']=="pineapple")
	
	{
		echo "<b> 510.Ананас: pineapple</b>";
		$eng6="pineapple";
	}
	else
	{
		echo "510-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="quince")
	
	{
		echo "<b> 511.Айва: quince</b>";
		$eng7="quince";
	}
	else
	{
		echo "511-неверно";
	}
	
}
?>
<br>
Фрукты:
</b>

505.quince
506.pomegranate
507.plum
508.pear
509.peach
510.pineapple
511.persimmon






















































<form action="19-2.php" method="post">
<p>
Слива:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Гранат:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Персик:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Груша:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Хурма:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ананас:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Айва:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="plum" && @$_REQUEST['eng2']=="pomegranate" && @$_REQUEST['eng3']=="peach" && @$_REQUEST['eng4']=="pear" && @$_REQUEST['eng5']=="persimmon" && @$_REQUEST['eng6']=="pineapple" && @$_REQUEST['eng7']=="quince"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/19-3.php'>19 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>