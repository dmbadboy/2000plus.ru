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
if (@$_REQUEST['eng1']=="living room")
	
	{
		echo "<b> 316.Гостиная: living room</b>";
	
		$eng1="living room";
	}
	else
	{
		echo "316-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="stairs")
	
	{
		echo "<b> 317.Лесница: stairs</b>";
		$eng2="stairs";
	}
	else
	{
		echo "317-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="toilet")
	
	{
		echo "<b> 318.Туалет:toilet</b>";
		$eng3="toilet";
	}
	else
	{
		echo "318-Неверно.";
	}
	if (@$_REQUEST['eng4']=="wall")
	
	{
		echo "<b> 319.Стена: wall</b>";
		$eng4="wall";
	}
	else
	{
		echo "319-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="window")
	
	{
		echo "<b> 320.Окно:window</b>";
		$eng5="window";
	}
	else
	{
		echo "320-Неверно.";
	}
if (@$_REQUEST['eng6']=="window-sill")
	
	{
		echo "<b> 321.Подоконник: window-sill</b>";
		$eng6="window-sill";
	}
	else
	{
		echo "321-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="ceiling")
	
	{
		echo "<b> 322.Потолок: ceiling</b>";
		$eng7="ceiling";
	}
	else
	{
		echo "322-неверно";
	}
	
}
?>
<br>
Жилище:

316.ceiling
317.stairs
318.living room
319.window
320.wall
321.toilet
322.window-sill






































<form action="12-3.php" method="post">
<p>
Гостиная:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Лесница:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Туалет:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Стена:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Окно:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Подоконник:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Потолок:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="living room" && @$_REQUEST['eng2']=="stairs" && @$_REQUEST['eng3']=="toilet" && @$_REQUEST['eng4']=="wall" && @$_REQUEST['eng5']=="window" && @$_REQUEST['eng6']=="window-sill" && @$_REQUEST['eng7']=="ceiling"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/12-4.php'>12 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>