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
if (@$_REQUEST['eng1']=="squeezer")
	
	{
		echo "<b> 421.Соковыжималка: squeezer</b>";
	
		$eng1="squeezer";
	}
	else
	{
		echo "421-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="steam cooker")
	
	{
		echo "<b> 422.Пароварка: steam cooker</b>";
		$eng2="steam cooker";
	}
	else
	{
		echo "422-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="tape-recorder")
	
	{
		echo "<b> 423.Магнитофон:tape-recorder</b>";
		$eng3="tape-recorder";
	}
	else
	{
		echo "423-Неверно.";
	}
	if (@$_REQUEST['eng4']=="video recorder")
	
	{
		echo "<b> 424.Видео магнитофон: video recorder</b>";
		$eng4="video recorder";
	}
	else
	{
		echo "424-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="toaster")
	
	{
		echo "<b> 425.Тостер:toaster</b>";
		$eng5="toaster";
	}
	else
	{
		echo "425-Неверно.";
	}
if (@$_REQUEST['eng6']=="TV-set")
	
	{
		echo "<b> 426.Телевизор: TV-set</b>";
		$eng6="TV-set";
	}
	else
	{
		echo "426-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="vacuum cleaner")
	
	{
		echo "<b> 427.Пылесос: vacuumb cleaner</b>";
		$eng7="vacuum cleaner";
	}
	else
	{
		echo "427-неверно";
	}
	
}
?>
<br>
Современные удобства,бытовая техника:

421.vacuum cleaner
422.steam cooker
423.squeezer
424.video recorder
425.tape-recorder
426.TV-set
427.toaster
















































<form action="16-2.php" method="post">
<p>
Соковыжималка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Пароварка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Магнитофон:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Видео магнитофон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Тостер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Телевизор:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Пылесос:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="squeezer" && @$_REQUEST['eng2']=="steam cooker" && @$_REQUEST['eng3']=="tape-recorder" && @$_REQUEST['eng4']=="video recorder" && @$_REQUEST['eng5']=="toaster" && @$_REQUEST['eng6']=="TV-set" && @$_REQUEST['eng7']=="vacuum cleaner"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/16-3.php'>16 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>