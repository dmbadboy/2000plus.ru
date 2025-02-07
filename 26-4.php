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
	
	
	if (@$_REQUEST['eng1']=="ambulance")
	
	{
		echo "<b> 708.Машина скорой помощи: ambulance</b>";
		$eng1="ambulance";
	}
	else
	{
		echo "708-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="chemist's")
	
	{
		echo "<b> 709.Аптека:chemist's</b>";
	
		$eng2="chemist's";
	}
	else
	{
		echo "709-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="emergency hospital")
	
	{
			echo "<b> 710.Больница скорой помощи: emergency hospital</b>";
	
		$eng3="emergency hospital";
		
		
	}
	else
	{
		echo "710-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="first-aid post")
	
	{
		echo "<b> 711.Медпункт: first-aid post</b>";
		$eng4="first-aid post";
		
		
	}
	else
	{
		echo "711-Неверно.";
	}
	if (@$_REQUEST['eng5']=="maternity hospital/home")
	
	{
		echo "<b> 712.Родильный дом:maternity hospital/home</b>";
		$eng5="maternity hospital/home";
		
		
	}
	else
	{
		echo "712-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="optician's")
	
	{
		echo "<b> 713.Оптика: optician's</b>";
		$eng6="optician's";
		
		
	}
	else
	{
		echo "713.Неверно.";
	}
if (@$_REQUEST['eng7']=="polyclinic")
	
	{
		echo "<b> 714.Поликлиника: polyclinic";
		$eng7="polyclinic";
		
		
	}
	else
	{
		echo "714-Неверно.";
	}
	
	
}
?>
<br>
Медецинские службы и учреждения
</b>























708.chemist's
709.ambulance
710.first-aid post
711.emergency hospital
712.optician's
713.maternity hospital/home
714.polyclinic


















































<form action="26-4.php" method="post">
<p>
Машина скорой помощи:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Аптека:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Больница скорой помощи :<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Медпункт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Родильный дом:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Оптика:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Поликлиника:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="ambulance" && @$_REQUEST['eng2']=="chemist's" && @$_REQUEST['eng3']=="emergency hospital" && @$_REQUEST['eng4']=="first-aid post" && @$_REQUEST['eng5']=="maternity hospital/home" && @$_REQUEST['eng6']=="optician's" && @$_REQUEST['eng7']=="polyclinic"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/27-1.php'>27 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>