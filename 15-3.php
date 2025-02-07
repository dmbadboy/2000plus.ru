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
if (@$_REQUEST['eng1']=="electricity")
	
	{
		echo "<b> 400.Электричество: electricity</b>";
	
		$eng1="electricity";
	}
	else
	{
		echo "400-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="gas")
	
	{
		echo "<b> 401.Газ: gas</b>";
		$eng2="gas";
	}
	else
	{
		echo "401-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="lift")
	
	{
		echo "<b> 402.Лифт:lift</b>";
		$eng3="lift";
	}
	else
	{
		echo "402-Неверно.";
	}
	if (@$_REQUEST['eng4']=="running-water")
	
	{
		echo "<b> 403.Водопровод: running-water</b>";
		$eng4="running-water";
	}
	else
	{
		echo "403-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="air conditioner")
	
	{
		echo "<b> 404.Кондиционер:air conditioner</b>";
		$eng5="air conditioner";
	}
	else
	{
		echo "404-Неверно.";
	}
if (@$_REQUEST['eng6']=="camera")
	
	{
		echo "<b> 405.Фотооппарат,кинокамера: camera</b>";
		$eng6="camera";
	}
	else
	{
		echo "405-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="digital camera")
	
	{
		echo "<b> 406.Цифровой фотооппарат,цифровая камера: digital camera</b>";
		$eng7="digital camera";
	}
	else
	{
		echo "406-неверно";
	}
	
}
?>
<br>
Современные удобства,бытовая техника:

400.digital camera
401.gas
402.electricity
403.running-water
404.lift
405.camera
406.air conditioner














































<form action="15-3.php" method="post">
<p>
Электричество:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Газ:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Лифт:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Водопровод:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Кондиционер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Фотооппарат,кинокамера:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Цифровой фотооппарат,цифровая камера:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="electricity" && @$_REQUEST['eng2']=="gas" && @$_REQUEST['eng3']=="lift" && @$_REQUEST['eng4']=="running-water" && @$_REQUEST['eng5']=="air conditioner" && @$_REQUEST['eng6']=="camera" && @$_REQUEST['eng7']=="digital camera"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/15-4.php'>15 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>