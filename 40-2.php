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
	
	
	if (@$_REQUEST['eng1']=="orror film")
	
	{
		echo "<b> 1091.Фильм ужасов: horror film</b>";
		$eng1="horror film";
	}
	else
	{
		echo "1091-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="musical film")
	
	{
		echo "<b> 1092.Музыкальный фильм: musical film</b>";
	
		$eng2="musical film";
	}
	else
	{
		echo "1092-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="popular scince film")
	
	{
			echo "<b> 1093.Научно-популярный популярный фильм: popular science film</b>";
	
		$eng3="popular science film";
		
		
	}
	else
	{
		echo "1093-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="release a film")
	
	{
		echo "<b> 1094.Выпускать фильм (на экран):release a film </b>";
		$eng4="release a film";
		
		
	}
	else
	{
		echo "1094-Неверно.";
	}
	if (@$_REQUEST['eng5']=="science fiction film")
	
	{
		echo "<b> 1095.Научно-фантастический фильм: science fiction film</b>";
		$eng5="science fiction film";
		
		
	}
	else
	{
		echo "1095-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="shoot/make a film")
	
	{
		echo "<b> 1096.Снимать фильм:shoot/make a film</b>";
		$eng6="shoot/make a film";
		
		
	}
	else
	{
		echo "1096.Неверно.";
	}
if (@$_REQUEST['eng7']=="silent film")
	
	{
		echo "<b> 1097.Немой фильм:silent film";
		$eng7="silent film";
		
		
	}
	else
	{
		echo "1097-Неверно.";
	}
	
	
}
?>
<br>
Кино
</b>























































1091.horror film
1092.popular science film
1093.science fiction film
1094.release a film
1095.shoot/make a film
1096.musical film
1097.silent film

















































<form action="40-2.php" method="post">
<p>
Фильм ужасов:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Музыкальный фильм:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Научно-популярный фильм:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Выпускать фильм (на экран):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Научно-фантастический фильм:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Снимать фильм:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Немой фильм:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="horror film" && @$_REQUEST['eng2']=="musical film" && @$_REQUEST['eng3']=="popular science film" && @$_REQUEST['eng4']=="release a film" && @$_REQUEST['eng5']=="science fiction film" && @$_REQUEST['eng6']=="shoot/make a film" && @$_REQUEST['eng7']=="silent film"){
echo "<h2>Отличная работа. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/40-3.php'>40 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>