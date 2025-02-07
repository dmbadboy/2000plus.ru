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
if (@$_REQUEST['eng1']=="choleric")
	
	{
		echo "<b> 71.Холерический темперамент: choleric</b>";
	
		$eng1="choleric";
	}
	else
	{
		echo "71-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="melancholic")
	
	{
		echo "<b> 72.Меланхолический темперамент: melancholic</b>";
		$eng2="melancholic";
	}
	else
	{
		echo "72-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="phlegmatic")
	
	{
		echo "<b> 73.Флегматический темперамент:phlegmatic</b>";
		$eng3="phlegmatic";
	}
	else
	{
		echo "73-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sanguine")
	
	{
		echo "<b> 74.Сангвинический темперамент: sanguine</b>";
		$eng4="sanguine";
	}
	else
	{
		echo "74-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="trait")
	
	{
		echo "<b> 75.Характерная черта,особенност: trait</b>";
		$eng5="trait";
	}
	else
	{
		echo "75-Неверно.";
	}
if (@$_REQUEST['eng6']=="attentive")
	
	{
		echo "<b> 76.Внимательный: attentive</b>";
		$eng6="attentive";
	}
	else
	{
		echo "76-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="calm")
	
	{
		echo "<b> 77.Темперамент,характер,нрав:: calm</b>";
		$eng7="calm";
	}
	else
	{
		echo "70-неверно";
	}
	
}
?>
<br>
Человеческая природа,положительные черты характера:
71.attentive
72.sanguine
73.melancholic
74.trait
75.phlegmatic
76.choleric
77.calm











<form action="3-3.php" method="post">
<p>
Холерический темперамент:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Меланхолический темперамент:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Флегматический темперамент:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сангвинический темперамент:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Характерная черта,особенность:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Внимательный:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Спокойный:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="choleric" && @$_REQUEST['eng2']=="melancholic" && @$_REQUEST['eng3']=="phlegmatic" && @$_REQUEST['eng4']=="sanguine" && @$_REQUEST['eng5']=="trait" && @$_REQUEST['eng6']=="attentive" && @$_REQUEST['eng7']=="calm"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/3-4.php'>3 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>