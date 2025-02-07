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
if (@$_REQUEST['eng1']=="greedy")
	
	{
		echo "<b> 99.Жадный: absent-greedy</b>";
	
		$eng1="greedy";
	}
	else
	{
		echo "99-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="hot-tempered")
	
	{
		echo "<b> 100.Вспыльчивый: hot-tempered</b>";
		$eng2="hot-tempered";
	}
	else
	{
		echo "100-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="impudent")
	
	{
		echo "<b> 101.Дерзкий,нахальный:impudent</b>";
		$eng3="impudent";
	}
	else
	{
		echo "101-Неверно.";
	}
	if (@$_REQUEST['eng4']=="irritable")
	
	{
		echo "<b> 102.Раздражительный: irritable</b>";
		$eng4="irritable";
	}
	else
	{
		echo "102-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="lazy")
	
	{
		echo "<b> 103.Ленивый :lazy</b>";
		$eng5="lazy";
	}
	else
	{
		echo "103-Неверно.";
	}
if (@$_REQUEST['eng6']=="obstinate")
	
	{
		echo "<b> 104.Завистливый: obstinate</b>";
		$eng6="obstinate";
	}
	else
	{
		echo "104-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="reserved")
	
	{
		echo "<b> 105.Суетливый: reserved</b>";
		$eng7="reserved";
	}
	else
	{
		echo "105-неверно";
	}
	
}
?>
<br>
Отрицательные черты характера:


99.reserved
100.irritable
101.hot-tempered
102.impudent
103.obstinate
104.lazy
105.greedy




















<form action="4-3.php" method="post">
<p>
Жадный:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Вспыльчивый:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Нахальный,дерзкий:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Раздражительный:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ленивый:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Упрямый:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Скрытный:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="greedy" && @$_REQUEST['eng2']=="hot-tempered" && @$_REQUEST['eng3']=="impudent" && @$_REQUEST['eng4']=="irritable" && @$_REQUEST['eng5']=="lazy" && @$_REQUEST['eng6']=="obstinate" && @$_REQUEST['eng7']=="reserved"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/4-4.php'>4 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>