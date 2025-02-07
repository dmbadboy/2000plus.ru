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
if (@$_REQUEST['eng1']=="sister")
	
	{
		echo "<b> 148.Сестра: sister</b>";
	
		$eng1="sister";
	}
	else
	{
		echo "148-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="sister-in-law")
	
	{
		echo "<b> 149.Невестка(жена брата),золовка(сестра мужа),своященица(сестра жены): sister-in-law</b>";
		$eng2="sister-in-law";
	}
	else
	{
		echo "149-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="son")
	
	{
		echo "<b> 150.Сын:son</b>";
		$eng3="son";
	}
	else
	{
		echo "150-Неверно.";
	}
	if (@$_REQUEST['eng4']=="stepdaughter")
	
	{
		echo "<b> 151.Подчерница: stepdaughter</b>";
		$eng4="stepdaughter";
	}
	else
	{
		echo "151-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="stepfather")
	
	{
		echo "<b> 152.Отчим :stepfather</b>";
		$eng5="stepfather";
	}
	else
	{
		echo "152-Неверно.";
	}
if (@$_REQUEST['eng6']=="stepmother")
	
	{
		echo "<b> 153.Мачеха: stepmother</b>";
		$eng6="stepmother";
	}
	else
	{
		echo "153-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="stepson")
	
	{
		echo "<b> 154.Пасынок: stepson</b>";
		$eng7="stepson";
	}
	else
	{
		echo "154-неверно";
	}
	
}
?>
<br>
Родственные отношения:


148.stepfather
149.sister-in-law
150.son
151.sister
152.stepdaughter
153.stepmother
154.stepson


























<form action="6-3.php" method="post">
<p>
Сестра:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Невестка(жена брата),золовка(сестра мужа),своященица(сестра жены):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Сын:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Подчерница:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Отчим:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Мачеха:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Насынок:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="sister" && @$_REQUEST['eng2']=="sister-in-law" && @$_REQUEST['eng3']=="son" && @$_REQUEST['eng4']=="stepdaughter" && @$_REQUEST['eng5']=="stepfather" && @$_REQUEST['eng6']=="stepmother" && @$_REQUEST['eng7']=="stepson"){
echo "<h2>Отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/6-4.php'>6 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>