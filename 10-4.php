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
if (@$_REQUEST['eng1']=="mule")
	
	{
		echo "<b> 267.Шлепанец,босоножка, сабо: mule</b>";
	
		$eng1="mule";
	}
	else
	{
		echo "267-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="sandal")
	
	{
		echo "<b> 268.Сандалия: sandal</b>";
		$eng2="sandal";
	}
	else
	{
		echo "268-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="shoe")
	
	{
		echo "<b> 269.Туфля,полуботинок:shoe</b>";
		$eng3="shoe";
	}
	else
	{
		echo "269-Неверно.";
	}
	if (@$_REQUEST['eng4']=="slipper")
	
	{
		echo "<b> 270.Тапочки: slipper</b>";
		$eng4="slipper";
	}
	else
	{
		echo "270-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="sock")
	
	{
		echo "<b> 271.Носок:sock</b>";
		$eng5="sock";
	}
	else
	{
		echo "271-Неверно.";
	}
if (@$_REQUEST['eng6']=="stocking")
	
	{
		echo "<b> 272.Чулок: stocking</b>";
		$eng6="stocking";
	}
	else
	{
		echo "272-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="beret")
	
	{
		echo "<b> 273.Берет: beret</b>";
		$eng7="beret";
	}
	else
	{
		echo "273-неверно";
	}
	
}
?>
<br>
Обувь,головные уборы:

267.beret
268.shoe
269.sandal
270.sock
271.slipper
272.stocking
273.mule






























<form action="10-4.php" method="post">
<p>
Шлепанец,босоножка, сабо:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Сандалия:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Туфля,полуботинок:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Тапочек:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Носок:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Чулок:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Берет:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="mule" && @$_REQUEST['eng2']=="sandal" && @$_REQUEST['eng3']=="shoe" && @$_REQUEST['eng4']=="slipper" && @$_REQUEST['eng5']=="sock" && @$_REQUEST['eng6']=="stocking" && @$_REQUEST['eng7']=="beret"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/11-1.php'>11 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>