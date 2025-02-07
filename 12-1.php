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
if (@$_REQUEST['eng1']=="fence")
	
	{
		echo "<b> 302.Забор,ограда: fence</b>";
	
		$eng1="fence";
	}
	else
	{
		echo "302-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="flat")
	
	{
		echo "<b> 303.Квартира: flat</b>";
		$eng2="flat";
	}
	else
	{
		echo "303-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="floor")
	
	{
		echo "<b> 304.Пол:floor</b>";
		$eng3="floor";
	}
	else
	{
		echo "304-Неверно.";
	}
	if (@$_REQUEST['eng4']=="garage")
	
	{
		echo "<b> 305.Гараж: garage</b>";
		$eng4="garage";
	}
	else
	{
		echo "305-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="garden")
	
	{
		echo "<b> 306.Сад:garden</b>";
		$eng5="garden";
	}
	else
	{
		echo "306-Неверно.";
	}
if (@$_REQUEST['eng6']=="gate")
	
	{
		echo "<b> 307.Ворота,калитка: gate</b>";
		$eng6="gate";
	}
	else
	{
		echo "307-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="house")
	
	{
		echo "<b> 308.Дверь: house</b>";
		$eng7="house";
	}
	else
	{
		echo "308-неверно";
	}
	
}
?>
<br>
Жилище:

302.garden
303.fence
304.floor
305.gate
306.garage
307.house
308.flat




































<form action="12-1.php" method="post">
<p>
Забор,ограда:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Квартира:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пол:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Гараж:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Сад:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ворота,калитка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Дом:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="fence" && @$_REQUEST['eng2']=="flat" && @$_REQUEST['eng3']=="floor" && @$_REQUEST['eng4']=="garage" && @$_REQUEST['eng5']=="garden" && @$_REQUEST['eng6']=="gate" && @$_REQUEST['eng7']=="house"){
echo "<h2>Огонь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/12-2.php'>12 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>