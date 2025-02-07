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
	
	
	if (@$_REQUEST['eng1']=="glossy magazine")
	
	{
		echo "<b> 869.Заголовок: glosy magazine</b>";
		$eng1="glossy magazine";
	}
	else
	{
		echo "869-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="newspaper")
	
	{
		echo "<b> 870.Газета: newspaper</b>";
	
		$eng2="newspaper";
	}
	else
	{
		echo "870-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="daily newspaper")
	
	{
			echo "<b> 871.Ежедневная газета:daily newspaper</b>";
	
		$eng3="daily newspaper";
		
		
	}
	else
	{
		echo "871-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="quality newspaper")
	
	{
		echo "<b> 871.Солидная газета:quality newspaper</b>";
		$eng4="quality newspaper";
		
		
	}
	else
	{
		echo "871-Неверно.";
	}
	if (@$_REQUEST['eng5']=="weekly newspaper")
	
	{
		echo "<b> 873.Еженедельник: weekly newspaper</b>";
		$eng5="weekly newspaper";
		
		
	}
	else
	{
		echo "873-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="newsstand")
	
	{
		echo "<b> 874.Газетный киоск:newsstand</b>";
		$eng6="newsstand";
		
		
	}
	else
	{
		echo "874.Неверно.";
	}
if (@$_REQUEST['eng7']=="notice")
	
	{
		echo "<b> 875.Объявление:notice";
		$eng7="notice";
		
		
	}
	else
	{
		echo "875-Неверно.";
	}
	
	
}
?>
<br>
Пресса
</b>














































868.newspaper
869.daily newspaper
870.quality newspaper
871.newsstand
872.weekly newspaper
873.glossy magazine
874.notice

















































<form action="32-3.php" method="post">
<p>
Журнал в глянцевой обложке:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Газета:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Ежедневная газета:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Солидная газета:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Еженедельник:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Газетный киоск:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Объявление:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="glossy magazine" && @$_REQUEST['eng2']=="newspaper" && @$_REQUEST['eng3']=="daily newspaper" && @$_REQUEST['eng4']=="quality newspaper" && @$_REQUEST['eng5']=="weekly newspaper" && @$_REQUEST['eng6']=="newsstand" && @$_REQUEST['eng7']=="notice"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/32-4.php'>32 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>