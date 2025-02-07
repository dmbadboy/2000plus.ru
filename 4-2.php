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
if (@$_REQUEST['eng1']=="absent-minded")
	
	{
		echo "<b> 92.Рассеянный: absent-minded</b>";
	
		$eng1="absent-minded";
	}
	else
	{
		echo "92-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="boasful")
	
	{
		echo "<b> 93.Благородный: boasful</b>";
		$eng2="boasful";
	}
	else
	{
		echo "93-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="cruel")
	
	{
		echo "<b> 94.Жесткий,хвастливый:cruel</b>";
		$eng3="cruel";
	}
	else
	{
		echo "94-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cunning")
	
	{
		echo "<b> 95.Хитрый: cunning</b>";
		$eng4="cunning";
	}
	else
	{
		echo "95-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="depressed")
	
	{
		echo "<b> 96.Подавленный :depressed</b>";
		$eng5="depressed";
	}
	else
	{
		echo "96-Неверно.";
	}
if (@$_REQUEST['eng6']=="envious")
	
	{
		echo "<b> 97.Завистливый: envious</b>";
		$eng6="envious";
	}
	else
	{
		echo "97-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="fussy")
	
	{
		echo "<b> 98.Суетливый: fussy</b>";
		$eng7="fussy";
	}
	else
	{
		echo "98-неверно";
	}
	
}
?>
<br>
Отрицательные черты характера:

92.boasful
93.fussy
94.cunning
95.cruel
96.envious
97.absent-minded
98.depressed


















<form action="4-2.php" method="post">
<p>
Рассеянный:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Хвастливый:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Жестокий,безжалостный:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Хитрый:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Подавленный:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Завистливый:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Суетливый:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="absent-minded" && @$_REQUEST['eng2']=="boasful" && @$_REQUEST['eng3']=="cruel" && @$_REQUEST['eng4']=="cunning" && @$_REQUEST['eng5']=="depressed" && @$_REQUEST['eng6']=="envious" && @$_REQUEST['eng7']=="fussy"){
echo "<h2>Отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/4-3.php'>4 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>