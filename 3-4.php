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
if (@$_REQUEST['eng1']=="cheerful")
	
	{
		echo "<b> 78.Жизнерадостный: cheerful</b>";
	
		$eng1="cheerful";
	}
	else
	{
		echo "78-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="decent")
	
	{
		echo "<b> 79.Порядочный: decent</b>";
		$eng2="decent";
	}
	else
	{
		echo "79-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="faitful")
	
	{
		echo "<b> 80.Преданный:faitful</b>";
		$eng3="faitful";
	}
	else
	{
		echo "80-Неверно.";
	}
	if (@$_REQUEST['eng4']=="frank")
	
	{
		echo "<b> 81.Откровенный: frank</b>";
		$eng4="frank";
	}
	else
	{
		echo "81-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="generous")
	
	{
		echo "<b> 82.Щедрый: generous</b>";
		$eng5="generous";
	}
	else
	{
		echo "82-Неверно.";
	}
if (@$_REQUEST['eng6']=="industrious")
	
	{
		echo "<b> 83.Трудолюбивый: industrious</b>";
		$eng6="industrious";
	}
	else
	{
		echo "83-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="kind")
	
	{
		echo "<b> 84.Добрый: kind</b>";
		$eng7="kind";
	}
	else
	{
		echo "84-неверно";
	}
	
}
?>
<br>
Положительные черты характера:
78.generous
79.decent
80.kind
81.faitful
82.industrious
83.frank
84.cheerful














<form action="3-4.php" method="post">
<p>
Жизнерадостный:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Порядочный:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Преданный:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Откровенный:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Щедрый:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Трудолюбивый:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Добрый:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cheerful" && @$_REQUEST['eng2']=="decent" && @$_REQUEST['eng3']=="faitful" && @$_REQUEST['eng4']=="frank" && @$_REQUEST['eng5']=="generous" && @$_REQUEST['eng6']=="industrious" && @$_REQUEST['eng7']=="kind"){
echo "<h2>Замечательно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/4-1.php'>4 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>