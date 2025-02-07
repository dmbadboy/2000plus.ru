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
if (@$_REQUEST['eng1']=="custumer")
	
	{
		echo "<b> 589.Покупатель: custumer</b>";
	
		$eng1="custumer";
	}
	else
	{
		echo "589-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="departament store")
	
	{
		echo "<b> 590.Универсальный магазин, универмаг: departament store</b>";
		$eng2="departament store";
	}
	else
	{
		echo "590-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="expensive")
	
	{
		echo "<b> 591.Дорогой :expensive</b>";
		$eng3="expensive";
	}
	else
	{
		echo "591-Неверно.";
	}
	if (@$_REQUEST['eng4']=="fashion")
	
	{
		echo "<b> 592.Мода, стиль: fashion</b>";
		$eng4="fashion";
	}
	else
	{
		echo "592-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="fit")
	
	{
		echo "<b> 593.Хорошо сидеть, быть по размеру: fit";
		$eng5="fit";
	}
	else
	{
		echo "593.Неверно.";
	}
if (@$_REQUEST['eng6']=="glassware departament")
	
	{
		echo "<b> 594.Отдел стеклянной посуды: glasware departament</b>";
		$eng6="glasware departament";
	}
	else
	{
		echo "594-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="grocery")
	
	{
		echo "<b> 595.Гастрономия, бакалея: grocery</b>";
		$eng7="grocery";
	}
	else
	{
		echo "595-неверно";
	}
	
}
?>
<br>
Магазины и отделы:
</b>









589.departament store
590.custumer
591.fashion
592.expensive
593.glassware departament
594.fit
595.grocery






















































+
<form action="22-2.php" method="post">
<p>
Покупатель:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Универсальный магазин, универмаг:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Дорогой:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Мода, стиль:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Хорошо сидеть, быть по размеру:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Отдел стеклянной посуды:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Гастрономия, бакалея:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="custumer" && @$_REQUEST['eng2']=="departament store" && @$_REQUEST['eng3']=="expensive" && @$_REQUEST['eng4']=="fashion" && @$_REQUEST['eng5']=="fit" && @$_REQUEST['eng6']=="glassware departament" && @$_REQUEST['eng7']=="grocery"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/22-3.php'>22 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>