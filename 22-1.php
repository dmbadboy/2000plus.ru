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
if (@$_REQUEST['eng1']=="precious stone")
	
	{
		echo "<b> 582.Драгаценный камень: precious stone</b>";
	
		$eng1="precious stone";
	}
	else
	{
		echo "582-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="ring")
	
	{
		echo "<b> 583.Кольцо: ring</b>";
		$eng2="ring";
	}
	else
	{
		echo "583-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="silver")
	
	{
		echo "<b> 584.Серебро :silver</b>";
		$eng3="silver";
	}
	else
	{
		echo "584-Неверно.";
	}
	if (@$_REQUEST['eng4']=="bakery")
	
	{
		echo "<b> 585.Булочная, пекарня: bakery</b>";
		$eng4="bakery";
	}
	else
	{
		echo "585-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="cash-desk")
	
	{
		echo "<b> 586.Касса: cash-desk";
		$eng5="cash-desk";
	}
	else
	{
		echo "586.Неверно.";
	}
if (@$_REQUEST['eng6']=="cheap")
	
	{
		echo "<b> 587.Дешевый: cheap</b>";
		$eng6="cheap";
	}
	else
	{
		echo "587-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="confectionery")
	
	{
		echo "<b> 588.Кондитерский магазин: confectionery</b>";
		$eng7="confectionery";
	}
	else
	{
		echo "588-неверно";
	}
	
}
?>
<br>
Ювелирные украшения:
</b>








582.ring
583.precious stone
584.bakery
585.silver
586.cheap
587.cash-desk
588.confectionery






















































+
<form action="22-1.php" method="post">
<p>
Драгаценный камень:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кольцо:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Серебро:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Булочная, пекарня:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Касса:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Дешевый:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кондитерский магазин:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="precious stone" && @$_REQUEST['eng2']=="ring" && @$_REQUEST['eng3']=="silver" && @$_REQUEST['eng4']=="bakery" && @$_REQUEST['eng5']=="cash-desk" && @$_REQUEST['eng6']=="cheap" && @$_REQUEST['eng7']=="confectionery"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/22-2.php'>22 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>