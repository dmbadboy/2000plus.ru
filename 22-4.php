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
if (@$_REQUEST['eng1']=="jeweller's shop")
	
	{
		echo "<b> 603.Ювелирный магазин: jeweller's shop</b>";
	
		$eng1="jeweller's shop";
	}
	else
	{
		echo "603-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="size")
	
	{
		echo "<b> 604.Размер(одежды): size</b>";
		$eng2="size";
	}
	else
	{
		echo "604-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="suit")
	
	{
		echo "<b> 605.Подходить, быть к лицу:suit</b>";
		$eng3="suit";
	}
	else
	{
		echo "605-Неверно.";
	}
	if (@$_REQUEST['eng4']=="supermarket")
	
	{
		echo "<b> 606.Супермаркет: supermarket</b>";
		$eng4="supermarket";
	}
	else
	{
		echo "606-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="try on")
	
	{
		echo "<b> 607.Примерить: try on";
		$eng5="try on";
	}
	else
	{
		echo "607.Неверно.";
	}
if (@$_REQUEST['eng6']=="trying-on cabin")
	
	{
		echo "<b> 608.Примерочная: trying-on cabin</b>";
		$eng6="trying-on cabin";
	}
	else
	{
		echo "608-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="doctor")
	
	{
		echo "<b> 609.Врач: doctor</b>";
		$eng7="doctor";
	}
	else
	{
		echo "609-неверно";
	}
	
}
?>
<br>
Магазины и отделы,медицинское обслуживания:
</b>











603.size
604.jeweller's shop
605.supermarket
606.suit
607.trying-on cabin 
608.doctor
609.try on cabin























































<form action="22-4.php" method="post">
<p>
Ювелирный магазин:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Размер (одежды):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Подходить ,быть к лицу:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Супермаркет:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Примерить:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Примерочная:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Врач:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="jeweller's shop" && @$_REQUEST['eng2']=="size" && @$_REQUEST['eng3']=="suit" && @$_REQUEST['eng4']=="supermarket" && @$_REQUEST['eng5']=="try on" && @$_REQUEST['eng6']=="trying-on cabin" && @$_REQUEST['eng7']=="doctor"){
echo "<h2>Ты сегодня жжёшь Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/23-1.php'>22 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>