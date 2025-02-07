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
	
	
	if (@$_REQUEST['eng1']=="crossing")
	
	{
		echo "<b> 979.Переход: crossing</b>";
		$eng1="crossing";
	}
	else
	{
		echo "979-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="pedestrian crossing")
	
	{
		echo "<b> 980.Пешеходный переход: pedestrian crossing</b>";
	
		$eng2="pedestrian crossing";
	}
	else
	{
		echo "980-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="pedestrian subway crossing")
	
	{
			echo "<b> 981.Подземный переход: pedestrian subway crossing</b>";
	
		$eng3="pedestrian subway crossing";
		
		
	}
	else
	{
		echo "981-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="crossroad")
	
	{
		echo "<b> 982.Перекрёсток: crossroad</b>";
		$eng4="crossroad";
		
		
	}
	else
	{
		echo "982-Неверно.";
	}
	if (@$_REQUEST['eng5']=="entrance")
	
	{
		echo "<b> 983.Входная дверь, вход: entrance/b>";
		$eng5="entrance";
		
		
	}
	else
	{
		echo "983-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="exit")
	
	{
		echo "<b> 984.Выход:exit</b>";
		$eng6="exit";
		
		
	}
	else
	{
		echo "984.Неверно.";
	}
if (@$_REQUEST['eng7']=="lane")
	
	{
		echo "<b> 985.Узкая дорога, тропинка:lane";
		$eng7="lane";
		
		
	}
	else
	{
		echo "985-Неверно.";
	}
	
	
}
?>
<br>
Город
</b>






















































979.crossing
980.pedestrian subway crossing
981.entrance
982.crossroad
983.exit
984.pedestrian crossing
985.lane

















































<form action="36-2.php" method="post">
<p>
Переход:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Пешеходный преход:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Подземный переход:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Перекрёсток:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Вход, входная дверь:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Выход:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Узкая дорога, тропинка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="crossing" && @$_REQUEST['eng2']=="pedestrian crossing" && @$_REQUEST['eng3']=="pedestrian subway crossing" && @$_REQUEST['eng4']=="crossroad" && @$_REQUEST['eng5']=="entrance" && @$_REQUEST['eng6']=="exit" && @$_REQUEST['eng7']=="lane"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/36-3.php'>36 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>