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
	
	
	if (@$_REQUEST['eng1']=="degree examination")
	
	{
		echo "<b> 736.Государственный экзамен: degree examination</b>";
		$eng1="degree examination";
	}
	else
	{
		echo "736-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="end-of-year examination")
	
	{
		echo "<b> 737.Переводной экзамен:end-of-year examination</b>";
	
		$eng2="end-of-year examination";
	}
	else
	{
		echo "737-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="final examination")
	
	{
			echo "<b> 738.Выпускной экзамен:final examination</b>";
	
		$eng3="final examination";
		
		
	}
	else
	{
		echo "738-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="pass an examination")
	
	{
		echo "<b> 739.Сдать экзамен: pass an examination</b>";
		$eng4="pass an examination";
		
		
	}
	else
	{
		echo "739-Неверно.";
	}
	if (@$_REQUEST['eng5']=="preliminary examination")
	
	{
		echo "<b> 740.Вступительный экзамен:preliminary examination</b>";
		$eng5="preliminary examination";
		
		
	}
	else
	{
		echo "740-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="sit/take/have an examination")
	
	{
		echo "<b> 741.Сдавать экзамен: sit/take/have an examination</b>";
		$eng6="sit/take/have an examination";
		
		
	}
	else
	{
		echo "741.Неверно.";
	}
if (@$_REQUEST['eng7']=="education")
	
	{
		echo "<b> 742.Образование: education";
		$eng7="education";
		
		
	}
	else
	{
		echo "742-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>



























736.end-of-year examination
737.degree examination
738.pass an examination
739.final examination
740.sit/take/have an examination
741.preliminary examination
742.education


















































<form action="27-4.php" method="post">
<p>
Государственный экзамен:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Переводной экзамен:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Выпускной экзамен:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сдать экзамен:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Вступительный экзамен:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сдавать экзамен:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Образование:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="degree examination" && @$_REQUEST['eng2']=="end-of-year examination" && @$_REQUEST['eng3']=="final examination" && @$_REQUEST['eng4']=="pass an examination" && @$_REQUEST['eng5']=="preliminary examination" && @$_REQUEST['eng6']=="sit/take/have an examination" && @$_REQUEST['eng7']=="education"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/28-1.php'>28 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>