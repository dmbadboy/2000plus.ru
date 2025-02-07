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
if (@$_REQUEST['eng1']=="tea")
	
	{
		echo "<b> 435.Чай: tea</b>";
	
		$eng1="tea";
	}
	else
	{
		echo "435-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="herbal tea")
	
	{
		echo "<b> 436.Чай на травах: herbal tea</b>";
		$eng2="herbal tea";
	}
	else
	{
		echo "436-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="tonic")
	
	{
		echo "<b> 437.Пиво:tonic</b>";
		$eng3="tonic";
	}
	else
	{
		echo "437-Неверно.";
	}
	if (@$_REQUEST['eng4']=="water")
	
	{
		echo "<b> 438.Вода: water</b>";
		$eng4="water";
	}
	else
	{
		echo "438-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="mineral water")
	
	{
		echo "<b> 439.Минеральная вода:mineral water</b>";
		$eng5="mineral water";
	}
	else
	{
		echo "439-Неверно.";
	}
if (@$_REQUEST['eng6']=="soda water")
	
	{
		echo "<b> 440.Газированная вода: soda water</b>";
		$eng6="soda water";
	}
	else
	{
		echo "440-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="wine")
	
	{
		echo "<b> 441.Вино: wine</b>";
		$eng7="wine";
	}
	else
	{
		echo "441-неверно";
	}
	
}
?>
<br>
Напитки:

435.wine
436.herbal tea
437.tea
438.water
439.tonic
440.soda water
441.mineral water


















































<form action="16-4.php" method="post">
<p>
Чай:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Чай на травах:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Тоник:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Вода:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Минеральная вода:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Газированная вода:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Вино:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="tea" && @$_REQUEST['eng2']=="herbal tea" && @$_REQUEST['eng3']=="tonic" && @$_REQUEST['eng4']=="water" && @$_REQUEST['eng5']=="mineral water" && @$_REQUEST['eng6']=="soda water" && @$_REQUEST['eng7']=="wine"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/17-1.php'>17 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>