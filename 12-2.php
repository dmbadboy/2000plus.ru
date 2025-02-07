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
if (@$_REQUEST['eng1']=="hall")
	
	{
		echo "<b> 309.Прихожая: hall</b>";
	
		$eng1="hall";
	}
	else
	{
		echo "309-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="key")
	
	{
		echo "<b> 310.Ключи: key</b>";
		$eng2="key";
	}
	else
	{
		echo "310-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="kitchen")
	
	{
		echo "<b> 311.Кухня:kitchen</b>";
		$eng3="kitchen";
	}
	else
	{
		echo "311-Неверно.";
	}
	if (@$_REQUEST['eng4']=="roof")
	
	{
		echo "<b> 312.Крыша: roof</b>";
		$eng4="roof";
	}
	else
	{
		echo "312-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="room")
	
	{
		echo "<b> 313.Комната:room</b>";
		$eng5="room";
	}
	else
	{
		echo "313-Неверно.";
	}
if (@$_REQUEST['eng6']=="bathroom")
	
	{
		echo "<b> 314.Ванная: bathroom</b>";
		$eng6="bathroom";
	}
	else
	{
		echo "314-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="bedroom")
	
	{
		echo "<b> 308.Дверь: bedroom</b>";
		$eng7="bedroom";
	}
	else
	{
		echo "312-неверно";
	}
	
}
?>
<br>
Жилище:

309.bedroom
310.hall
311.kitchen
312.key
313.roof
314.bathroom
315.room






































<form action="12-2.php" method="post">
<p>
Прихожая:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ключ(от дома):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Кухня:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Крыша:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Комната:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ванная:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Спальня:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="hall" && @$_REQUEST['eng2']=="key" && @$_REQUEST['eng3']=="kitchen" && @$_REQUEST['eng4']=="roof" && @$_REQUEST['eng5']=="room" && @$_REQUEST['eng6']=="bathroom" && @$_REQUEST['eng7']=="bedroom"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/12-3.php'>12 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>