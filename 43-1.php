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
	
	
	if (@$_REQUEST['eng1']=="sculture")
	
	{
		echo "<b> 1168.Скульптура: sculpture</b>";
		$eng1="sculpture";
	}
	else
	{
		echo "1168-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="sketch")
	
	{
		echo "<b> 1169.Набросок, эскиз: sketch</b>";
	
		$eng2="sketch";
	}
	else
	{
		echo "1169-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="statue")
	
	{
			echo "<b> 1170.Статуя: statue</b>";
	
		$eng3="statue";
		
		
	}
	else
	{
		echo "1170-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="still life")
	
	{
		echo "<b> 1171.Натюрморт:still life</b>";
		$eng4="still life";
		
		
	}
	else
	{
		echo "1171-Неверно.";
	}
	if (@$_REQUEST['eng5']=="tapestry")
	
	{
		echo "<b> 1172.Гобелен: tapestry</b>";
		$eng5="tapestry";
		
		
	}
	else
	{
		echo "1172-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="brush")
	
	{
		echo "<b> 1173.Кисть: brush</b>";
		$eng6="brush";
		
		
	}
	else
	{
		echo "1173.Неверно.";
	}
if (@$_REQUEST['eng7']=="canvas")
	
	{
		echo "<b> 1174.Холст: canvas";
		$eng7="canvas";
		
		
	}
	else
	{
		echo "1174-Неверно.";
	}
	
	
}
?>
<br>
Художественное искусство, художественные принадлежности
</b>























































1168.sculpture
1169.statue
1170.tapestry
1171.still life
1172.brush
1173.sketch
1174.canvas
















































<form action="43-1.php" method="post">
<p>
Скульптура:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Набросок, эскиз:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Статуя:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Натюрморт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Гобелен:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кисть:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Холст:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="sculpture" && @$_REQUEST['eng2']=="sketch" && @$_REQUEST['eng3']=="statue" && @$_REQUEST['eng4']=="still life" && @$_REQUEST['eng5']=="tapestry" && @$_REQUEST['eng6']=="brush" && @$_REQUEST['eng7']=="canvas"){
echo "<h2>Кто-сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/43-2.php'>42 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>