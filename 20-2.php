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
if (@$_REQUEST['eng1']=="parsley")
	
	{
		echo "<b> 533.Петрушка: parsley</b>";
	
		$eng1="parsley";
	}
	else
	{
		echo "533-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="peas")
	
	{
		echo "<b> 534.Горох: peas</b>";
		$eng2="peas";
	}
	else
	{
		echo "534-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="pepper")
	
	{
		echo "<b> 535.Перец:pepper</b>";
		$eng3="pepper";
	}
	else
	{
		echo "535-Неверно.";
	}
	if (@$_REQUEST['eng4']=="potatoes")
	
	{
		echo "<b> 536.Картофель: potatoes</b>";
		$eng4="potatoes";
	}
	else
	{
		echo "536-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="pumpkin")
	
	{
		echo "<b> 537.Тыква: pumpkin</b>";
		$eng5="pumpkin";
	}
	else
	{
		echo "537.Неверно.";
	}
if (@$_REQUEST['eng6']=="radish")
	
	{
		echo "<b> 538.Редька: radish</b>";
		$eng6="radish";
	}
	else
	{
		echo "538-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="spinach")
	
	{
		echo "<b> 539.Шпинат: spinach</b>";
		$eng7="spinach";
	}
	else
	{
		echo "539-неверно";
	}
	
}
?>
<br>
Фрукты,овощи и специи:
</b>

533.spinach
533.peas
534.parsley
535.potatoes
536.pepper
537.radish
538.pumpkin























































<form action="20-2.php" method="post">
<p>
Петрушка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Горох:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Перец:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Картофель:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Тыква:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Редька:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Шпинат:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="parsley" && @$_REQUEST['eng2']=="peas" && @$_REQUEST['eng3']=="pepper" && @$_REQUEST['eng4']=="potatoes" && @$_REQUEST['eng5']=="pumpkin" && @$_REQUEST['eng6']=="radish" && @$_REQUEST['eng7']=="spinach"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/20-3.php'>20 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>