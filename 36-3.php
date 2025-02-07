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
	
	
	if (@$_REQUEST['eng1']=="itter-bin/=basket")
	
	{
		echo "<b> 986.Урна, корзина для мусора: litter-bin/-basket</b>";
		$eng1="litter-bin/-basket";
	}
	else
	{
		echo "986-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="outskirts")
	
	{
		echo "<b> 987.Окраина (города): outskirts</b>";
	
		$eng2="outskirts";
	}
	else
	{
		echo "987-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="park")
	
	{
			echo "<b> 988.Парк: park</b>";
	
		$eng3="park";
		
		
	}
	else
	{
		echo "988-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="pavement")
	
	{
		echo "<b> 989.Тротуар: pavement</b>";
		$eng4="pavement";
		
		
	}
	else
	{
		echo "989-Неверно.";
	}
	if (@$_REQUEST['eng5']=="road")
	
	{
		echo "<b> 990.Дорога,путь , шоссе: road/b>";
		$eng5="road";
		
		
	}
	else
	{
		echo "990-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="ring road")
	
	{
		echo "<b> 91.Кольцевая автодорога:ring road</b>";
		$eng6="ring road";
		
		
	}
	else
	{
		echo "991.Неверно.";
	}
if (@$_REQUEST['eng7']=="square")
	
	{
		echo "<b> 992.Площадь:square";
		$eng7="square";
		
		
	}
	else
	{
		echo "992-Неверно.";
	}
	
	
}
?>
<br>
Город
</b>






















































986.litter-bin/-basket
987.pavement
988.park
989.road
990.outskirts
991.ring road
992.square

















































<form action="36-3.php" method="post">
<p>
Урна, корзина для мусора:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Окраинна (города):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Парк:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Тротуар:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Дорога,путь, шоссе:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кольцевая дорога:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Площать:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="litter-bin/-basket" && @$_REQUEST['eng2']=="outskirts" && @$_REQUEST['eng3']=="park" && @$_REQUEST['eng4']=="pavement" && @$_REQUEST['eng5']=="road" && @$_REQUEST['eng6']=="ring road" && @$_REQUEST['eng7']=="square"){
echo "<h2>Кто сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/36-4.php'>36 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>