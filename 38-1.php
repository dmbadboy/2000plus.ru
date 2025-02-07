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
	
	
	if (@$_REQUEST['eng1']=="bus")
	
	{
		echo "<b> 1028.Автобус: bus</b>";
		$eng1="bus";
	}
	else
	{
		echo "1028-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="car")
	
	{
		echo "<b> 1029.Машина: car</b>";
	
		$eng2="car";
	}
	else
	{
		echo "1029-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="double-decker")
	
	{
			echo "<b> 1030.Двухэтажный автобус: double-decker</b>";
	
		$eng3="double-decker";
		
		
	}
	else
	{
		echo "1030-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="lorry/truck")
	
	{
		echo "<b> 1031.Грузовик: lorry/truck</b>";
		$eng4="lorry/truck";
		
		
	}
	else
	{
		echo "1031-Неверно.";
	}
	if (@$_REQUEST['eng5']=="motorbike")
	
	{
		echo "<b> 1032.Мотоцикл: motorbike</b>";
		$eng5="motorbike";
		
		
	}
	else
	{
		echo "1032-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="taxi")
	
	{
		echo "<b> 1033.Такси:taxi</b>";
		$eng6="taxi";
		
		
	}
	else
	{
		echo "1033.Неверно.";
	}
if (@$_REQUEST['eng7']=="tram")
	
	{
		echo "<b> 1034.Трамвай:tram";
		$eng7="tram";
		
		
	}
	else
	{
		echo "1027-Неверно.";
	}
	
	
}
?>
<br>
Транспорт
</b>























































1028.bus
1029.double-decker
1030.motorbike
1031.lorry/truck
1032.taxi
1033.car
1034.tram

















































<form action="38-1.php" method="post">
<p>
Автобус:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Автомобиль:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Двухэтажный автобус:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Грузовик:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Мотоцикл:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Такси:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Трамвай:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bus" && @$_REQUEST['eng2']=="car" && @$_REQUEST['eng3']=="double-decker" && @$_REQUEST['eng4']=="lorry/truck" && @$_REQUEST['eng5']=="motorbike" && @$_REQUEST['eng6']=="taxi" && @$_REQUEST['eng7']=="tram"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/38-2.php'>38 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>