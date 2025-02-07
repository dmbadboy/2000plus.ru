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
	
	
	if (@$_REQUEST['eng1']=="lecture")
	
	{
		echo "<b> 757.Лекция: lecture/b>";
		$eng1="lecture";
	}
	else
	{
		echo "757-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="pupil")
	
	{
		echo "<b> 758.Ученик:pupil</b>";
	
		$eng2="pupil";
	}
	else
	{
		echo "758-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="rector")
	
	{
			echo "<b> 759.Ректор:rector</b>";
	
		$eng3="rector";
		
		
	}
	else
	{
		echo "759-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="rostrum")
	
	{
		echo "<b> 760.Трибуна,кафедра: rostrum</b>";
		$eng4="rostrum";
		
		
	}
	else
	{
		echo "760-Неверно.";
	}
	if (@$_REQUEST['eng5']=="scholar")
	
	{
		echo "<b> 761.Учённый:scholar</b>";
		$eng5="scholar";
		
		
	}
	else
	{
		echo "761-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="scholarship")
	
	{
		echo "<b> 762.Стипендия: scholarship</b>";
		$eng6="scholarship";
		
		
	}
	else
	{
		echo "762.Неверно.";
	}
if (@$_REQUEST['eng7']=="science")
	
	{
		echo "<b> 763.Наука: science";
		$eng7="science";
		
		
	}
	else
	{
		echo "763-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>






























757.pupil
758.lecture
759.rostrum
760.rector
761.scholarship
762.scholar
763.science


















































<form action="28-3.php" method="post">
<p>
Лекция:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ученик:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Ректор:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Трибуна,кафедра:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ученный:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Стипендия:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Наука:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="lecture" && @$_REQUEST['eng2']=="pupil" && @$_REQUEST['eng3']=="rector" && @$_REQUEST['eng4']=="rostrum" && @$_REQUEST['eng5']=="scholar" && @$_REQUEST['eng6']=="scholarship" && @$_REQUEST['eng7']=="science"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/28-4.php'>28 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>