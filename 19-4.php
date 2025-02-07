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
if (@$_REQUEST['eng1']=="beans")
	
	{
		echo "<b> 519.Фасоль: beans</b>";
	
		$eng1="beans";
	}
	else
	{
		echo "519-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cabbage")
	
	{
		echo "<b> 520.Капуста: cabbage</b>";
		$eng2="cabbage";
	}
	else
	{
		echo "520-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="carrot")
	
	{
		echo "<b> 521.Морковь:carrot</b>";
		$eng3="carrot";
	}
	else
	{
		echo "521-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cauliflower")
	
	{
		echo "<b> 522.Цветная капуста: cauliflower</b>";
		$eng4="cauliflower";
	}
	else
	{
		echo "522-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="celery")
	
	{
		echo "<b> 523.Сельдерей: celery</b>";
		$eng5="celery";
	}
	else
	{
		echo "523.Неверно.";
	}
if (@$_REQUEST['eng6']=="coriander")
	
	{
		echo "<b> 524.Кинза,кориандер: coriander</b>";
		$eng6="coriander";
	}
	else
	{
		echo "524-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="cucumber")
	
	{
		echo "<b> 525.Огурец: cucumber</b>";
		$eng7="cucumber";
	}
	else
	{
		echo "525-неверно";
	}
	
}
?>
<br>
Фрукты,овощи и специи:
</b>

519.cucumber
520.cabbage
521.beans
522.cauliflower
523.carrot
524.coriander
525.celery






















































<form action="19-4	.php" method="post">
<p>
Фасоль:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Капуста:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Морковь:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Цветная капуста:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Сельдерей:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кинза, кориандр:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Огурец:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="beans" && @$_REQUEST['eng2']=="cabbage" && @$_REQUEST['eng3']=="carrot" && @$_REQUEST['eng4']=="cauliflower" && @$_REQUEST['eng5']=="celery" && @$_REQUEST['eng6']=="coriander" && @$_REQUEST['eng7']=="cucumber"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/20-1.php'>20 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>