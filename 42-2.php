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
	
	
	if (@$_REQUEST['eng1']=="artist")
	
	{
		echo "<b> 1147.Художник: artist</b>";
		$eng1="artist";
	}
	else
	{
		echo "1147-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="drawing")
	
	{
		echo "<b> 1148.Рисунок: drawing</b>";
	
		$eng2="drawing";
	}
	else
	{
		echo "1148-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="exibition")
	
	{
			echo "<b> 1149.Выстовка: exibition</b>";
	
		$eng3="exibition";
		
		
	}
	else
	{
		echo "1149-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="fresco")
	
	{
		echo "<b> 1150.Фреска:fresco</b>";
		$eng4="fresco";
		
		
	}
	else
	{
		echo "1150-Неверно.";
	}
	if (@$_REQUEST['eng5']=="gallery")
	
	{
		echo "<b> 1151.Галерея: gallery</b>";
		$eng5="gallery";
		
		
	}
	else
	{
		echo "1151-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="landscape")
	
	{
		echo "<b> 1152.Пейзаж: landscape</b>";
		$eng6="landscape";
		
		
	}
	else
	{
		echo "1152.Неверно.";
	}
if (@$_REQUEST['eng7']=="masterpiece")
	
	{
		echo "<b> 1153.Шедевр: masterpiece";
		$eng7="masterpiece";
		
		
	}
	else
	{
		echo "1153-Неверно.";
	}
	
	
}
?>
<br>
Художественное искусство
</b>























































1140.artist
1141.exhibition
1142.gallery
1143.fresco
1144.landscape
1145.drawing
1146.masterpiece

















































<form action="42-2.php" method="post">
<p>
Художник:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Рисунок:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Выстовка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Фрейска:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Галерея:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Пейзаж:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Шедевр:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="artist" && @$_REQUEST['eng2']=="drawing" && @$_REQUEST['eng3']=="exibition" && @$_REQUEST['eng4']=="fresco" && @$_REQUEST['eng5']=="gallery" && @$_REQUEST['eng6']=="landscape" && @$_REQUEST['eng7']=="masterpiece"){
echo "<h2>Кто сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/42-3.php'>42 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>