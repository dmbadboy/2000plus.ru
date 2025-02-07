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
if (@$_REQUEST['eng1']=="standard lamp")
	
	{
		echo "<b> 379.Торшер: standard lamp</b>";
	
		$eng1="standard lamp";
	}
	else
	{
		echo "379-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="pillow")
	
	{
		echo "<b> 380.Подушка: pillow</b>";
		$eng2="pillow";
	}
	else
	{
		echo "380-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="pillowcase")
	
	{
		echo "<b> 381.Наволочка:pillowcase</b>";
		$eng3="pillowcase";
	}
	else
	{
		echo "381-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sconce")
	
	{
		echo "<b> 382.Бра: sconce</b>";
		$eng4="sconce";
	}
	else
	{
		echo "382-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="sheet")
	
	{
		echo "<b> 383.Простыня:sheet</b>";
		$eng5="sheet";
	}
	else
	{
		echo "383-Неверно.";
	}
if (@$_REQUEST['eng6']=="wardrobe")
	
	{
		echo "<b> 384.Шкаф(платяной): wardrobe</b>";
		$eng6="wardrobe";
	}
	else
	{
		echo "384-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="bath")
	
	{
		echo "<b> 385.Ванная: bath</b>";
		$eng7="bath";
	}
	else
	{
		echo "384-неверно";
	}
	
}
?>
<br>
Cпальня,ванная и туалет:


372.bath
373.pillow
374.pillowcase
375.sheet
376.sconce
377.standard lamp
378.watdrobe












































<form action="14-4.php" method="post">
<p>
Торшер:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Подушка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Наволочка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бра:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Простыня:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Шкаф(платяной):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Ванная:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="standard lamp" && @$_REQUEST['eng2']=="pillow" && @$_REQUEST['eng3']=="pillowcase" && @$_REQUEST['eng4']=="sconce" && @$_REQUEST['eng5']=="sheet" && @$_REQUEST['eng6']=="wardrobe" && @$_REQUEST['eng7']=="bath"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/15-1.php'>15 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>