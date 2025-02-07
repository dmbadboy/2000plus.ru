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
	
	
	if (@$_REQUEST['eng1']=="prosthesis")
	
	{
		echo "<b> 680.Протез: prosthesis</b>";
		$eng1="prosthesis";
	}
	else
	{
		echo "680-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="pulse")
	
	{
		echo "<b> 681.Пульс:pulse</b>";
	
		$eng2="pulse";
	}
	else
	{
		echo "681-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="feel one's pulse")
	
	{
			echo "<b> 682.Пощупать пульс: feel one's pulse</b>";
	
		$eng3="feel one's pulse";
		
		
	}
	else
	{
		echo "682-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="syringe")
	
	{
		echo "<b> 683.Шприц: syringe</b>";
		$eng4="syringe";
		
		
	}
	else
	{
		echo "683-Неверно.";
	}
	if (@$_REQUEST['eng5']=="test")
	
	{
		echo "<b> 684.Анализ, исследование:test</b>";
		$eng5="test";
		
		
	}
	else
	{
		echo "684-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="test blood")
	
	{
		echo "<b> 685.Анализ крови: test blood</b>";
		$eng6="test blood";
		
		
	}
	else
	{
		echo "685.Неверно.";
	}
if (@$_REQUEST['eng7']=="thermometer")
	
	{
		echo "<b> 686.Термометр: thermometer";
		$eng7="thermometer";
		
		
	}
	else
	{
		echo "686-Неверно.";
	}
	
	
}
?>
<br>
Лечение:
</b>



















680.pulse
681.prosthesis
682.syringe
683.feel one's pulse
684.blood test
685.test
686.thermometer


















































<form action="25-4.php" method="post">
<p>
Протез:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Пульс:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пощупать пульс:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Шприц:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Анализ, иследование:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Анализ крови:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Термометр:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="prosthesis" && @$_REQUEST['eng2']=="pulse" && @$_REQUEST['eng3']=="feel one's pulse" && @$_REQUEST['eng4']=="syringe" && @$_REQUEST['eng5']=="test" && @$_REQUEST['eng6']=="test blood" && @$_REQUEST['eng7']=="thermometer"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-1.php'>26 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>