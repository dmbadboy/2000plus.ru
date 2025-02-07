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
	
	
	if (@$_REQUEST['eng1']=="street")
	
	{
		echo "<b> 993.Улица: street</b>";
		$eng1="street";
	}
	else
	{
		echo "993-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="one-way street")
	
	{
		echo "<b> 994.Улица с односторонним движением: one-way street</b>";
	
		$eng2="one-way street";
	}
	else
	{
		echo "994-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="through street")
	
	{
			echo "<b> 995.Улица без стетофоров, улица для скоростного движения: through strret</b>";
	
		$eng3="through street";
		
		
	}
	else
	{
		echo "995-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="traffic")
	
	{
		echo "<b> 996.Движение,транспорт: traffic</b>";
		$eng4="traffic";
		
		
	}
	else
	{
		echo "996-Неверно.";
	}
	if (@$_REQUEST['eng5']=="traffic jam/congestion")
	
	{
		echo "<b> 997.Пробка на дороге: traffic jam/congestion/b>";
		$eng5="traffic jam/congestion";
		
		
	}
	else
	{
		echo "997-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="traffic lights")
	
	{
		echo "<b> 998.Светофор:traffic lights/b>";
		$eng6="traffic lights";
		
		
	}
	else
	{
		echo "998.Неверно.";
	}
if (@$_REQUEST['eng7']=="bank")
	
	{
		echo "<b> 999.Банк:bank";
		$eng7="bank";
		
		
	}
	else
	{
		echo "999-Неверно.";
	}
	
	
}
?>
<br>
Город,инфрастуктура города
</b>






















































993.street
994.through street
995.traffic jam/congestion
996.traffic
997.traffic lights
998.one-way-street
999.bank

















































<form action="36-4.php" method="post">
<p>
Улица:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Улица с односторонним движением:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Улица без светафоров, улица для скоростного движения:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Движение, траспорт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пробка на дороге:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Светофор:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Банк:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="street" && @$_REQUEST['eng2']=="one-way street" && @$_REQUEST['eng3']=="through street" && @$_REQUEST['eng4']=="traffic" && @$_REQUEST['eng5']=="traffic jam/congestion" && @$_REQUEST['eng6']=="traffic lights" && @$_REQUEST['eng7']=="bank"){
echo "<h2>Так держать. Держись молодцом. Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/37-1.php'>37 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>