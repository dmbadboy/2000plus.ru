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
if (@$_REQUEST['eng1']=="jug")
	
	{
		echo "<b> 330.Кувшин: jug</b>";
	
		$eng1="jug";
	}
	else
	{
		echo "330-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="kettle")
	
	{
		echo "<b> 331.Чайник, печь: kettle</b>";
		$eng2="kettle";
	}
	else
	{
		echo "331-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="knife")
	
	{
		echo "<b> 332.Нож:knife</b>";
		$eng3="knife";
	}
	else
	{
		echo "332-Неверно.";
	}
	if (@$_REQUEST['eng4']=="ladle")
	
	{
		echo "<b> 333.Половник: ladle</b>";
		$eng4="ladle";
	}
	else
	{
		echo "333-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="napkin")
	
	{
		echo "<b> 334.Салфетка:napkin</b>";
		$eng5="napkin";
	}
	else
	{
		echo "334-Неверно.";
	}
if (@$_REQUEST['eng6']=="pan")
	
	{
		echo "<b> 335.Кастрюля(любая открытая посуда для говтовки чего-либо): pan</b>";
		$eng6="pan";
	}
	else
	{
		echo "335-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="frying pan")
	
	{
		echo "<b> 336.Сковорода: frying pan</b>";
		$eng7="frying pan";
	}
	else
	{
		echo "329-неверно";
	}
	
}
?>
<br>
Кухня:

330.frying pan
331.jug
332.napkin
333.kettle
334.ladle
335.knife
336.pan








































<form action="13-1.php" method="post">
<p>
Кувшин:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Чайник:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Нож:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Половник:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Салфетка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кастрюля(любая открытая посуда для говтовки чего-либо):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Сковорода:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="jug" && @$_REQUEST['eng2']=="kettle" && @$_REQUEST['eng3']=="knife" && @$_REQUEST['eng4']=="ladle" && @$_REQUEST['eng5']=="napkin" && @$_REQUEST['eng6']=="pan" && @$_REQUEST['eng7']=="frying pan"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/13-2.php'>13 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>