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
	
	
	if (@$_REQUEST['eng1']=="tincture")
	
	{
		echo "<b> 687.Настойка: tincture</b>";
		$eng1="tincture";
	}
	else
	{
		echo "687-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="transfusion")
	
	{
		echo "<b> 688.Переливание:transfusion</b>";
	
		$eng2="transfusion";
	}
	else
	{
		echo "688-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="transfusion blood")
	
	{
			echo "<b> 689.Переливание крови: blood transfusion</b>";
	
		$eng3="transfusion blood";
		
		
	}
	else
	{
		echo "689-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="transplantation")
	
	{
		echo "<b> 690.Трансплантация(пересадка органов и тканей): transplantation</b>";
		$eng4="transplantation";
		
		
	}
	else
	{
		echo "690-Неверно.";
	}
	if (@$_REQUEST['eng5']=="transplantation heart")
	
	{
		echo "<b> 691.Пересадка сердца:transplantation heart</b>";
		$eng5="transplantation heart";
		
		
	}
	else
	{
		echo "691-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="X-ray picture")
	
	{
		echo "<b> 692.Ренгеновский снимок: X-ray picture</b>";
		$eng6="X-ray picture";
		
		
	}
	else
	{
		echo "692.Неверно.";
	}
if (@$_REQUEST['eng7']=="cardiologist")
	
	{
		echo "<b> 693.Епрдиолог: cardiologist";
		$eng7="cardiologist";
		
		
	}
	else
	{
		echo "693-Неверно.";
	}
	
	
}
?>
<br>
Лечение:
</b>




















687.transfusion
688.X-ray picture
689.tincture
690.transplantation
691.tranfusion blood 
692.transplantation heart
693.cardiologist


















































<form action="26-1.php" method="post">
<p>
Настойка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Переливание:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Переливание крови:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Трансплантация (пересадка органов или тканей):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пересадка сердца:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ренгеновский снимок:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кардиолог:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="tincture" && @$_REQUEST['eng2']=="transfusion" && @$_REQUEST['eng3']=="transfusion blood" && @$_REQUEST['eng4']=="transplantation" && @$_REQUEST['eng5']=="transplantation heart" && @$_REQUEST['eng6']=="X-ray picture" && @$_REQUEST['eng7']=="cardiologist"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-1.php'>26 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>