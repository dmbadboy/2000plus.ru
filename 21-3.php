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
if (@$_REQUEST['eng1']=="soap toilet")
	
	{
		echo "<b> 568.Туалетное мыло: soap toilet</b>";
	
		$eng1="nsoap toilet";
	}
	else
	{
		echo "568-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="soap laundry")
	
	{
		echo "<b> 569.Хозяйственное мыло: soap laundry</b>";
		$eng2="soap laundry";
	}
	else
	{
		echo "569-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="tooth brush")
	
	{
		echo "<b> 570.Зубная паста :tooth brush</b>";
		$eng3="tooth brush";
	}
	else
	{
		echo "570-Неверно.";
	}
	if (@$_REQUEST['eng4']=="tooth paste")
	
	{
		echo "<b> 571.Зубная паста: tooth paste</b>";
		$eng4="tooth paste";
	}
	else
	{
		echo "571-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="vaseline")
	
	{
		echo "<b> 572.Вазелин: vaseline";
		$eng5="vaseline";
	}
	else
	{
		echo "572.Неверно.";
	}
if (@$_REQUEST['eng6']=="amber")
	
	{
		echo "<b> 573.Янтарь: amber</b>";
		$eng6="amber";
	}
	else
	{
		echo "573-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="amethyst")
	
	{
		echo "<b> 574.Аметист: amethyst</b>";
		$eng7="amethyst";
	}
	else
	{
		echo "574-неверно";
	}
	
}
?>
<br>
Косметика и гигиенические средства,ювелирные украшения:
</b>






568.amber
569.soap laundry
570.tooth paste
571.tooth brush
572.vaseline
573.soap toilet
574.amethyst






















































+
<form action="21-3.php" method="post">
<p>
Туалетное мыло:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Хозяйственное мыло:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Зубная щетка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Зубная паста:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Вазелин:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Янтарь:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Аметист:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>
+
<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="soap toilet" && @$_REQUEST['eng2']=="soap laundry" && @$_REQUEST['eng3']=="tooth brush" && @$_REQUEST['eng4']=="tooth paste" && @$_REQUEST['eng5']=="vaseline" && @$_REQUEST['eng6']=="amber" && @$_REQUEST['eng7']=="amethyst"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/21-4.php'>21 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>