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
if (@$_REQUEST['eng1']=="nose")
	
	{
		echo "<b> 57.Нос: nose</b>";
	
		$eng1="nose";
	}
	else
	{
		echo "57-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="pupil")
	
	{
		echo "<b> 58.Зрачок pupil</b>";
		$eng2="pupil";
	}
	else
	{
		echo "58-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="temple")
	
	{
		echo "<b> 59.Висок:temple</b>";
		$eng3="temple";
	}
	else
	{
		echo "59-Неверно.";
	}
	if (@$_REQUEST['eng4']=="tongue")
	
	{
		echo "<b> 60.Язык: tongue</b>";
		$eng4="tongue";
	}
	else
	{
		echo "61-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="tooth")
	
	{
		echo "<b> 61.Зуб: tooth</b>";
		$eng5="tooth";
	}
	else
	{
		echo "61-Неверно.";
	}
if (@$_REQUEST['eng6']=="teeth")
	
	{
		echo "<b> 62.Зубы: teeth</b>";
		$eng6="teeth";
	}
	else
	{
		echo "62-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="whiskers")
	
	{
		echo "<b> 63.Затылок: whiskers</b>";
		$eng7="whiskers";
	}
	else
	{
		echo "63-неверно";
	}
	
}
?>
<br>
Голова и лицо:

57.temple
58.tongue
59.pupil
60.whiskers
61.teeth
62.nose
63.tooth










<form action="3-1.php" method="post">
<p>
Нос:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Зрачок:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Висок:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Язык:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Зуб:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Зубы:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Бакенбарды:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="nose" && @$_REQUEST['eng2']=="pupil" && @$_REQUEST['eng3']=="temple" && @$_REQUEST['eng4']=="tongue" && @$_REQUEST['eng5']=="tooth" && @$_REQUEST['eng6']=="teeth" && @$_REQUEST['eng7']=="whiskers"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/3-2.php'>3 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>