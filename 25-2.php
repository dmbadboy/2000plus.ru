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
	
	
	if (@$_REQUEST['eng1']=="diet")
	
	{
		echo "<b> 666.Диета: diet</b>";
		$eng1="diet";
	}
	else
	{
		echo "666-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dropper")
	
	{
		echo "<b> 667.Пипетка:dropper</b>";
	
		$eng2="dropper";
	}
	else
	{
		echo "667-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="drops")
	
	{
			echo "<b> 668.Капли: drops</b>";
	
		$eng3="drops";
		
		
	}
	else
	{
		echo "668-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="gargling")
	
	{
		echo "<b> 669.Полоскание: gargling</b>";
		$eng4="gargling";
		
		
	}
	else
	{
		echo "669-Неверно.";
	}
	if (@$_REQUEST['eng5']=="hot-water bottle")
	
	{
		echo "<b> 670.Грелка:hot-water bottle</b>";
		$eng5="hot-water bottle";
		
		
	}
	else
	{
		echo "670-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="inhalation")
	
	{
		echo "<b> 671.Ингаляция: inhalation</b>";
		$eng6="inhalation";
		
		
	}
	else
	{
		echo "671.Неверно.";
	}
if (@$_REQUEST['eng7']=="inhaler")
	
	{
		echo "<b> 672.Ингалятор: inhaler";
		$eng7="inhaler";
		
		
	}
	else
	{
		echo "672-Неверно.";
	}
	
	
}
?>
<br>
Лечение:
</b>

















666.inhalation
667.drops
668.dropper
669.hot-water bottle
670.gargling
671.diet
672.inhaler


















































<form action="25-2.php" method="post">
<p>
Диета:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Пипетка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Капли:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Полоскание:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Грелка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ингаляция:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Ингалятор:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="diet" && @$_REQUEST['eng2']=="dropper" && @$_REQUEST['eng3']=="drops" && @$_REQUEST['eng4']=="gargling" && @$_REQUEST['eng5']=="hot-water bottle" && @$_REQUEST['eng6']=="inhalation" && @$_REQUEST['eng7']=="inhaler"){
echo "<h2>Отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-3.php'>25 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>