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
if (@$_REQUEST['eng1']=="bide")
	
	{
		echo "<b> 386.Биде: bide</b>";
	
		$eng1="bide";
	}
	else
	{
		echo "386-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="ironing-board")
	
	{
		echo "<b> 387.Гладильная доска: ironing-board</b>";
		$eng2="ironing-board";
	}
	else
	{
		echo "387-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="jacuzzi")
	
	{
		echo "<b> 381.Джакузи(гидромассажная доска):jacuzzi</b>";
		$eng3="jacuzzi";
	}
	else
	{
		echo "381-Неверно.";
	}
	if (@$_REQUEST['eng4']=="mirror")
	
	{
		echo "<b> 389.Зеркало: mirror</b>";
		$eng4="mirror";
	}
	else
	{
		echo "389-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="shower")
	
	{
		echo "<b> 390.Душ:shower</b>";
		$eng5="shower";
	}
	else
	{
		echo "390-Неверно.";
	}
if (@$_REQUEST['eng6']=="take a shower")
	
	{
		echo "<b> 391.Принимать душ: take a shower</b>";
		$eng6="take a shower";
	}
	else
	{
		echo "391-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="walk-in shower")
	
	{
		echo "<b> 392.Душевая кабина: walk-in shower</b>";
		$eng7="walk-in shower";
	}
	else
	{
		echo "392-неверно";
	}
	
}
?>
<br>
Ванная и туалет:


379.walk-in shower
380.ironing-board
381.bide
382.mirror
383.jacuzzi
384.take a shower
385.shower













































<form action="15-1.php" method="post">
<p>
Биде:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Гладильная доска:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Джакузи(гидромассажная доска):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Зеркало:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Душ:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Принимать душ:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Душевая кабина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bide" && @$_REQUEST['eng2']=="ironing-board" && @$_REQUEST['eng3']=="jacuzzi" && @$_REQUEST['eng4']=="mirror" && @$_REQUEST['eng5']=="shower" && @$_REQUEST['eng6']=="take a shower" && @$_REQUEST['eng7']=="walk-in shower"){
echo "<h2>Круто. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/15-2.php'>15 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>