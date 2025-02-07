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
if (@$_REQUEST['eng1']=="singer")
	
	{
		echo "<b> 232.Певец: singer</b>";
	
		$eng1="singer";
	}
	else
	{
		echo "232-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="tailor")
	
	{
		echo "<b> 233.Портной: tailor</b>";
		$eng2="tailor";
	}
	else
	{
		echo "233-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="teacher")
	
	{
		echo "<b> 234.Учитель:teacher</b>";
		$eng3="teacher";
	}
	else
	{
		echo "234-Неверно.";
	}
	if (@$_REQUEST['eng4']=="translator")
	
	{
		echo "<b> 235.Переводчик: translator</b>";
		$eng4="translator";
	}
	else
	{
		echo "235-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="turner")
	
	{
		echo "<b> 236.Токарь:turney</b>";
		$eng5="turner";
	}
	else
	{
		echo "236-Неверно.";
	}
if (@$_REQUEST['eng6']=="worker")
	
	{
		echo "<b> 237.Рабочий: worker</b>";
		$eng6="worker";
	}
	else
	{
		echo "237-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="blouse")
	
	{
		echo "<b> 238.Блузка: blouse</b>";
		$eng7="blouse";
	}
	else
	{
		echo "238-неверно";
	}
	
}
?>
<br>
Профессии,одежда:


232.blouse
233.singer
234.teacher
235.tailor
236.translator
237.worker
238.turner






























<form action="9-3.php" method="post">
<p>
Певец:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Портной:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Учитель:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Переводчик:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Токарь:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Рабочий:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Блузка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="singer" && @$_REQUEST['eng2']=="tailor" && @$_REQUEST['eng3']=="teacher" && @$_REQUEST['eng4']=="translator" && @$_REQUEST['eng5']=="turner" && @$_REQUEST['eng6']=="worker" && @$_REQUEST['eng7']=="blouse"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/9-4.php'>9 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>