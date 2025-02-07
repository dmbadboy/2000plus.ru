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
	
	
	if (@$_REQUEST['eng1']=="headmaster")
	
	{
		echo "<b> 750.Директор школы: headmaster/b>";
		$eng1="headmaster";
	}
	else
	{
		echo "750-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="holidays")
	
	{
		echo "<b> 751.Каникулы:holidays</b>";
	
		$eng2="holidays";
	}
	else
	{
		echo "751-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="hostel")
	
	{
			echo "<b> 752.Студенческое общежитие:hostel</b>";
	
		$eng3="hostel";
		
		
	}
	else
	{
		echo "752-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="laboratory")
	
	{
		echo "<b> 753.Лаборатория: laboratory</b>";
		$eng4="laboratory";
		
		
	}
	else
	{
		echo "753-Неверно.";
	}
	if (@$_REQUEST['eng5']=="laboratory work")
	
	{
		echo "<b> 754.Лабораторная работа:laboratory work</b>";
		$eng5="laboratory work";
		
		
	}
	else
	{
		echo "754-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="laboratory assistant")
	
	{
		echo "<b> 755.Лаборант: laboratory assistant</b>";
		$eng6="laboratory assistant";
		
		
	}
	else
	{
		echo "755.Неверно.";
	}
if (@$_REQUEST['eng7']=="language laboratory")
	
	{
		echo "<b> 756.Лингафонный кабинет: language laboratory";
		$eng7="language laboratory";
		
		
	}
	else
	{
		echo "756-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>





























750.holidays
751.headmaster
752.laboratory
753.hostel
754.laboratory assistant
755.laboratory work
756.language laboratory


















































<form action="28-2.php" method="post">
<p>
Директор школы:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Каникулы:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Студенческое общежитие:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Лаборатория:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Лобораторная работа:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Лаборант:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Лингафонный кабинет:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="headmaster" && @$_REQUEST['eng2']=="holidays" && @$_REQUEST['eng3']=="hostel" && @$_REQUEST['eng4']=="laboratory" && @$_REQUEST['eng5']=="laboratory work" && @$_REQUEST['eng6']=="laboratory assistant" && @$_REQUEST['eng7']=="language laboratory"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/28-3.php'>28 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>