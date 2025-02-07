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
	
	
	if (@$_REQUEST['eng1']=="geometry")
	
	{
		echo "<b> 792.Геометрия: geometry</b>";
		$eng1="geometry";
	}
	else
	{
		echo "792-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="history")
	
	{
		echo "<b> 793.История:history</b>";
	
		$eng2="history";
	}
	else
	{
		echo "793-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="literature")
	
	{
			echo "<b> 794.Литература:literature</b>";
	
		$eng3="literature";
		
		
	}
	else
	{
		echo "794-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="mathematics")
	
	{
		echo "<b> 795.Математика: mathematics</b>";
		$eng4="mathematics";
		
		
	}
	else
	{
		echo "795-Неверно.";
	}
	if (@$_REQUEST['eng5']=="music")
	
	{
		echo "<b> 796.Музыка:music</b>";
		$eng5="music";
		
		
	}
	else
	{
		echo "796-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="physical training")
	
	{
		echo "<b> 797.Физкультура: physical training</b>";
		$eng6="physical training";
		
		
	}
	else
	{
		echo "797.Неверно.";
	}
if (@$_REQUEST['eng7']=="physics")
	
	{
		echo "<b> 798.Физика: physics";
		$eng7="physics";
		
		
	}
	else
	{
		echo "798-Неверно.";
	}
	
	
}
?>
<br>
Школьные предметы
</b>



































792.history
793.geometry
794.mathematics
795.literature
796.physical training
797.music
798.physics


















































<form action="29-4.php" method="post">
<p>
Геометрия:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
История:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Литература:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Математика:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Музыка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Физкультура:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Физика:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="geometry" && @$_REQUEST['eng2']=="history" && @$_REQUEST['eng3']=="literature" && @$_REQUEST['eng4']=="mathematics" && @$_REQUEST['eng5']=="music" && @$_REQUEST['eng6']=="physical training" && @$_REQUEST['eng7']=="physics"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/30-1.php'>29 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>