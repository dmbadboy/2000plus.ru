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
	
	
	if (@$_REQUEST['eng1']=="principles of personal and social safety")
	
	{
		echo "<b> 799.Основы безопасности жизнедеятельности: principles of personal and social safety</b>";
		$eng1="principles of personal and social safety";
	}
	else
	{
		echo "799-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="psychology")
	
	{
		echo "<b> 800.Психология:psychology</b>";
	
		$eng2="psychology";
	}
	else
	{
		echo "800-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="zoology")
	
	{
			echo "<b> 801.Зоология:zoology</b>";
	
		$eng3="zoology";
		
		
	}
	else
	{
		echo "801-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="adding-machine/calculator")
	
	{
		echo "<b> 802.Счётная машина, калькулятор: adding-machine/calculator</b>";
		$eng4="adding-machine/calculator";
		
		
	}
	else
	{
		echo "802-Неверно.";
	}
	if (@$_REQUEST['eng5']=="calendar")
	
	{
		echo "<b> 803.Календарь:calendar</b>";
		$eng5="calendar";
		
		
	}
	else
	{
		echo "803-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="computer")
	
	{
		echo "<b> 804.Компьютер: computer</b>";
		$eng6="computer";
		
		
	}
	else
	{
		echo "804.Неверно.";
	}
if (@$_REQUEST['eng7']=="desk")
	
	{
		echo "<b> 805.Письменный стол: desk";
		$eng7="desk";
		
		
	}
	else
	{
		echo "805-Неверно.";
	}
	
	
}
?>
<br>
Школьные предметы,офис
</b>




































799.psychology
800.principles of personal and social safety
801.adding-machine/calculator
802.zoology
803.computer
804.calendar
805.desk


















































<form action="30-1.php" method="post">
<p>
Основы безопасности жизнедеятельности:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Психология:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Зоология:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Счётная машина, калькулятор:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Календарь:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Компьютер:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Письменный стол:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="principles of personal and social safety" && @$_REQUEST['eng2']=="psychology" && @$_REQUEST['eng3']=="zoology" && @$_REQUEST['eng4']=="adding-machine/calculator" && @$_REQUEST['eng5']=="calendar" && @$_REQUEST['eng6']=="computer" && @$_REQUEST['eng7']=="desk"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/30-2.php'>30 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>