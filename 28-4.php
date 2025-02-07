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
	
	
	if (@$_REQUEST['eng1']=="applied science")
	
	{
		echo "<b> 764.Прикладная наука: applied science/b>";
		$eng1="applied science";
	}
	else
	{
		echo "764-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="exact science")
	
	{
		echo "<b> 765.Точная наука:exact science</b>";
	
		$eng2="exact science";
	}
	else
	{
		echo "765-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="seminar")
	
	{
			echo "<b> 766.Семинар:seminar</b>";
	
		$eng3="seminar";
		
		
	}
	else
	{
		echo "766-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="student")
	
	{
		echo "<b> 767.Студент: student</b>";
		$eng4="student";
		
		
	}
	else
	{
		echo "767-Неверно.";
	}
	if (@$_REQUEST['eng5']=="first-year student")
	
	{
		echo "<b> 768.Первокурсник:first-year student</b>";
		$eng5="first-year student";
		
		
	}
	else
	{
		echo "768-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="term")
	
	{
		echo "<b> 769.Семестр: term</b>";
		$eng6="term";
		
		
	}
	else
	{
		echo "769.Неверно.";
	}
if (@$_REQUEST['eng7']=="term paper")
	
	{
		echo "<b> 770.Курсовая работа: term paper";
		$eng7="term paper";
		
		
	}
	else
	{
		echo "770-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>































764.exact science
765.applied science
766.student
767.seminar
768.term
769.first-year student
770.term paper


















































<form action="28-4.php" method="post">
<p>
Прикладная наука:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Точная наука:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Семинар:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Студент:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Первокурсник:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Семестр:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Курсовая работа:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="applied science" && @$_REQUEST['eng2']=="exact science" && @$_REQUEST['eng3']=="seminar" && @$_REQUEST['eng4']=="student" && @$_REQUEST['eng5']=="first-year student" && @$_REQUEST['eng6']=="term" && @$_REQUEST['eng7']=="term paper"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/29-1.php'>29 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>