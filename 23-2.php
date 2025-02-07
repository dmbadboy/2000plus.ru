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
	
	
	if (@$_REQUEST['eng1']=="diagnose")
	
	{
		echo "<b> 617.Поставить диагноз: diagnose</b>";
		$eng1="diagnose";
	}
	else
	{
		echo "617-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="examination")
	
	{
		echo "<b> 618.Осмотр обследование:examination</b>";
	
		$eng2="examination";
	}
	else
	{
		echo "618-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="laboratory examination")
	
	{
			echo "<b> 619.Лабораторное иследование:laboratory</b>";
	
		$eng3="laboratory examination";
		
		
	}
	else
	{
		echo "619-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="ultrasonic/ultrasound examination")
	
	{
		echo "<b> 620.Врождённое заболевание: ultrasonic/ultrasound examination</b>";
		$eng4="ultrasonic/ultrasound examination";
		
		
	}
	else
	{
		echo "621-Неверно.";
	}
	if (@$_REQUEST['eng5']=="hospital")
	
	{
		echo "<b> 621.Больница:hospital</b>";
		$eng5="hospital";
		
		
	}
	else
	{
		echo "622-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="be in hospital")
	
	{
		echo "<b> 622.Лежать в больницы: be in hospital</b>";
		$eng6="be in hospital";
		
		
	}
	else
	{
		echo "623.Неверно.";
	}
if (@$_REQUEST['eng7']=="sick/ill")
	
	{
		echo "<b> 623.Больной: sick/ill";
		$eng7="sick/ill";
		
		
	}
	else
	{
		echo "623-Неверно.";
	}
	
	
}
?>
<br>
Медицинское обслуживания:
</b>













617.examination
618.be in hospital
619.ultrasonic/ultrasound examination
620.laboratory examination
621.hospital
622.diagnose
623.ill/sick























































<form action="23-2.php" method="post">
<p>
Поставить диагноз:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Осмотр, обследование:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Лабораторное иследование :<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Ультрозвуковое исследование:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Больница:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Лежать в больнице:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Больной:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="diagnose" && @$_REQUEST['eng2']=="emamination" && @$_REQUEST['eng3']=="laboratory examination" && @$_REQUEST['eng4']=="ultrasonic/ultrasound examination" && @$_REQUEST['eng5']=="hospital" && @$_REQUEST['eng6']=="be in hospital" && @$_REQUEST['eng7']=="ill/sick"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/23-3.php'>22 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>