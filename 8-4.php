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
if (@$_REQUEST['eng1']=="cook")
	
	{
		echo "<b> 211.Повар: cook</b>";
	
		$eng1="cook";
	}
	else
	{
		echo "211-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="diplomat")
	
	{
		echo "<b> 212.Дипломат: diplomat</b>";
		$eng2="diplomat";
	}
	else
	{
		echo "212-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="diver")
	
	{
		echo "<b> 213.Водолаз:diver</b>";
		$eng3="diver";
	}
	else
	{
		echo "213-Неверно.";
	}
	if (@$_REQUEST['eng4']=="doctor")
	
	{
		echo "<b> 214.Врач: doctor</b>";
		$eng4="doctor";
	}
	else
	{
		echo "214-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="driver")
	
	{
		echo "<b> 215.Водитель:driver</b>";
		$eng5="driver";
	}
	else
	{
		echo "215-Неверно.";
	}
if (@$_REQUEST['eng6']=="engineer")
	
	{
		echo "<b> 216.Инженер: engineer</b>";
		$eng6="engineer";
	}
	else
	{
		echo "216-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="farmer")
	
	{
		echo "<b> 217.Фермер: farmer</b>";
		$eng7="farmer";
	}
	else
	{
		echo "217-неверно";
	}
	
}
?>
<br>
Анкетные данные,профессии:





211.farmer
212.diplomat
213.engineer
214.cook
215.diver
216.doctor
217.driver





























<form action="8-4.php" method="post">
<p>
Повар:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Дипломат:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Водолаз:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Врач:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Водитель:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Инженер:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Фермер:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cook" && @$_REQUEST['eng2']=="diplomat" && @$_REQUEST['eng3']=="diver" && @$_REQUEST['eng4']=="doctor" && @$_REQUEST['eng5']=="driver" && @$_REQUEST['eng6']=="engineer" && @$_REQUEST['eng7']=="farmer"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/9-1.php'>9 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>