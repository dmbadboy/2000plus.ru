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
if (@$_REQUEST['eng1']=="tile floor")
	
	{
		echo "<b> 393.Кафельный пол: tile floor</b>";
	
		$eng1="tile floor";
	}
	else
	{
		echo "393-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="toilet pan")
	
	{
		echo "<b> 394.Унитаз: toilet pan</b>";
		$eng2="toilet pan";
	}
	else
	{
		echo "394-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="toilet-paper")
	
	{
		echo "<b> 395.Туалетная бумага:toilet-paper</b>";
		$eng3="toilet-paper";
	}
	else
	{
		echo "395-Неверно.";
	}
	if (@$_REQUEST['eng4']=="toilet tank")
	
	{
		echo "<b> 396.Смывной бачок: toilet take</b>";
		$eng4="toilet tank";
	}
	else
	{
		echo "396-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="towel")
	
	{
		echo "<b> 397.Полотенце:towel</b>";
		$eng5="towel";
	}
	else
	{
		echo "397-Неверно.";
	}
if (@$_REQUEST['eng6']=="wash-basin")
	
	{
		echo "<b> 398.Умывальная бакавина: wash-basin</b>";
		$eng6="wash-basin";
	}
	else
	{
		echo "398-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="central heating")
	
	{
		echo "<b> 399.Центральное отопление: central heating</b>";
		$eng7="central heating";
	}
	else
	{
		echo "399-неверно";
	}
	
}
?>
<br>
Ванная и туалет,современные удобства:


393.central heating
394.toilet pan
395.tile floor
396.toilet tank
397.toilet-paper
398.wash-basin
399.towel













































<form action="15-2.php" method="post">
<p>
Кафельный пол:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Унитаз:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Туалетная бумага:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Смывной бачок:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Полотенце:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Умывальная раковина:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Центральное отопление:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="tile floor" && @$_REQUEST['eng2']=="toilet pan" && @$_REQUEST['eng3']=="toilet-paper" && @$_REQUEST['eng4']=="toilet tank" && @$_REQUEST['eng5']=="towel" && @$_REQUEST['eng6']=="wash-basin" && @$_REQUEST['eng7']=="central heating"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/15-3.php'>15 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>