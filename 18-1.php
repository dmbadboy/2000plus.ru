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
if (@$_REQUEST['eng1']=="cake")
	
	{
		echo "<b> 470.Торт,пирожное: cake</b>";
	
		$eng1="cake";
	}
	else
	{
		echo "470-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="candy/sweet")
	
	{
		echo "<b> 471.Конфета: candy/sweet</b>";
		$eng2="candy/sweet";
	}
	else
	{
		echo "471-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="caramel")
	
	{
		echo "<b> 472.Карамель:caramel</b>";
		$eng3="caramel";
	}
	else
	{
		echo "472-Неверно.";
	}
	if (@$_REQUEST['eng4']=="chocolate")
	
	{
		echo "<b> 473.Шоколад: chocolate</b>";
		$eng4="chocolate";
	}
	else
	{
		echo "473-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="eclair")
	
	{
		echo "<b> 474.Эклер: eclair</b>";
		$eng5="eclair";
	}
	else
	{
		echo "474-Неверно.";
	}
if (@$_REQUEST['eng6']=="gingerbread")
	
	{
		echo "<b> 475.Имбирный пряник: gingerbread</b>";
		$eng6="gingerbread";
	}
	else
	{
		echo "475-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="jam")
	
	{
		echo "<b> 476.Джэм, варенье: jam</b>";
		$eng7="jam";
	}
	else
	{
		echo "476-неверно";
	}
	
}
?>
<br>
Выпечка и когндитерские изделия:

470.jam
471.candy/sweet
472.cake
473.chocolate
474.caramel
475.gingerbread
476.eclair





















































<form action="18-1.php" method="post">
<p>
Торт, пирожное:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Конфета:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Карамель:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Шоколад:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Эклер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Имбирный пряник:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Джем,варенье:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cake" && @$_REQUEST['eng2']=="candy/sweet" && @$_REQUEST['eng3']=="caramel" && @$_REQUEST['eng4']=="chocolate" && @$_REQUEST['eng5']=="eclair" && @$_REQUEST['eng6']=="gingerbread" && @$_REQUEST['eng7']=="jam"){
echo "<h2>Жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/18-2.php'>18 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>