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
	
	
	if (@$_REQUEST['eng1']=="charcoal")
	
	{
		echo "<b> 1175.Угольный карандаш: charcoal</b>";
		$eng1="charcoal";
	}
	else
	{
		echo "1175-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="china")
	
	{
		echo "<b> 1176.Фарфор: china</b>";
	
		$eng2="china";
	}
	else
	{
		echo "1176-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="clay")
	
	{
			echo "<b> 1177.Глина: clay</b>";
	
		$eng3="clay";
		
		
	}
	else
	{
		echo "1177-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="easel")
	
	{
		echo "<b> 1178.Мольберт:easel</b>";
		$eng4="easel";
		
		
	}
	else
	{
		echo "1178-Неверно.";
	}
	if (@$_REQUEST['eng5']=="frame")
	
	{
		echo "<b> 1179.Рама: frame</b>";
		$eng5="frame";
		
		
	}
	else
	{
		echo "1179-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="oils")
	
	{
		echo "<b> 1180.Масляные краски: oils</b>";
		$eng6="oils";
		
		
	}
	else
	{
		echo "1180.Неверно.";
	}
if (@$_REQUEST['eng7']=="palette")
	
	{
		echo "<b> 1181.Палитра: palette";
		$eng7="palette";
		
		
	}
	else
	{
		echo "1181-Неверно.";
	}
	
	
}
?>
<br>
Художественные принадлежности
</b>























































1175.charcoal
1176.clay
1177.frame
1178.easel
1179.oils
1180.china
1181.palette















































<form action="43-2.php" method="post">
<p>
Угольный карандаш:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Фарфор:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Глина:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Мольберт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Рама:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Масляные краски:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Палитра:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="charcoal" && @$_REQUEST['eng2']=="china" && @$_REQUEST['eng3']=="clay" && @$_REQUEST['eng4']=="easel" && @$_REQUEST['eng5']=="frame" && @$_REQUEST['eng6']=="oils" && @$_REQUEST['eng7']=="palette"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/43-3.php'>42 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>