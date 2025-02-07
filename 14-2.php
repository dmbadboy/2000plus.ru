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
if (@$_REQUEST['eng1']=="wall unit")
	
	{
		echo "<b> 365.Стенка: wall unit</b>";
	
		$eng1="wall unit";
	}
	else
	{
		echo "365-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="bed")
	
	{
		echo "<b> 366.Кровать: bed</b>";
		$eng2="bed";
	}
	else
	{
		echo "366-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="double bed")
	
	{
		echo "<b> 367.Двухспальная кровать:double bed</b>";
		$eng3="double bed";
	}
	else
	{
		echo "367-Неверно.";
	}
	if (@$_REQUEST['eng4']=="folding bed")
	
	{
		echo "<b> 368.Раскладушка: folding bed</b>";
		$eng4="folding bed";
	}
	else
	{
		echo "368-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="single bed")
	
	{
		echo "<b> 369.Односпальная кровать:single bed</b>";
		$eng5="single bed";
	}
	else
	{
		echo "369-Неверно.";
	}
if (@$_REQUEST['eng6']=="bedclothes")
	
	{
		echo "<b> 370.Постельное бельё: bedclothes</b>";
		$eng6="bedclothes";
	}
	else
	{
		echo "370-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="bedroom suite")
	
	{
		echo "<b> 371.Спальный гарнитур: bedroom suite</b>";
		$eng7="bedroom suite";
	}
	else
	{
		echo "371-неверно";
	}
	
}
?>
<br>
Гостиная,спальня:



358.double bed
359.bed
360.single bed
361.folding bed
362.bedroom suite
363.bedclothes
364.wall unit










































<form action="14-2.php" method="post">
<p>
Стенка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кровать:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Двухспальная кровать:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Раскладушка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Односпальная кровать:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Постельное бельё:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Спальный гарнитур:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="wall unit" && @$_REQUEST['eng2']=="bed" && @$_REQUEST['eng3']=="double bed" && @$_REQUEST['eng4']=="folding bed" && @$_REQUEST['eng5']=="single bed" && @$_REQUEST['eng6']=="bedclothes" && @$_REQUEST['eng7']=="bedroom suite"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/14-3.php'>14 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>