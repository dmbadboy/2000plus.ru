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
	
	
	if (@$_REQUEST['eng1']=="caries")
	
	{
		echo "<b> 631.Кариес: caries</b>";
		$eng1="caries";
	}
	else
	{
		echo "631-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="cold")
	
	{
		echo "<b> 632.Простуда:cold</b>";
	
		$eng2="cold";
	}
	else
	{
		echo "632-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="catch a cold")
	
	{
			echo "<b> 633.Простудиться: catch a cold</b>";
	
		$eng3="catch a cold";
		
		
	}
	else
	{
		echo "633-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="constipation")
	
	{
		echo "<b> 634.Запор: constipation</b>";
		$eng4="constipation";
		
		
	}
	else
	{
		echo "634-Неверно.";
	}
	if (@$_REQUEST['eng5']=="cough")
	
	{
		echo "<b> 635.Кашель, кашлять:cough</b>";
		$eng5="cough";
		
		
	}
	else
	{
		echo "635-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="flue")
	
	{
		echo "<b> 636.Грипп: flue</b>";
		$eng6="flue";
		
		
	}
	else
	{
		echo "636.Неверно.";
	}
if (@$_REQUEST['eng7']=="fracture")
	
	{
		echo "<b> 637.Перелом: fracture";
		$eng7="fracture";
		
		
	}
	else
	{
		echo "637-Неверно.";
	}
	
	
}
?>
<br>
Симптомы и болезни:
</b>














631.caries
632.catch a
633.cold
634.cough
635.constipation
636.fracture
637.flue





















































<form action="24-1.php" method="post">
<p>
Кариес:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Простуда:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Простудиться:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Запор:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Кашель,кашлять:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Грипп:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Перелом,трещина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="caries" && @$_REQUEST['eng2']=="cold" && @$_REQUEST['eng3']=="catch a cold" && @$_REQUEST['eng4']=="constipation" && @$_REQUEST['eng5']=="cough" && @$_REQUEST['eng6']=="flue" && @$_REQUEST['eng7']=="fracture"){
echo "<h2>Ты сегодня жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/24-2.php'>24 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>