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
	
	
	if (@$_REQUEST['eng1']=="injection")
	
	{
		echo "<b> 673.Инъекция: injection</b>";
		$eng1="injection";
	}
	else
	{
		echo "673-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="inoculation")
	
	{
		echo "<b> 674.Прививка:inoculation</b>";
	
		$eng2="inoculation";
	}
	else
	{
		echo "674-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="massage")
	
	{
			echo "<b> 675.Массаж: massage</b>";
	
		$eng3="massage";
		
		
	}
	else
	{
		echo "675-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="mixture")
	
	{
		echo "<b> 676.Микстура: mixture</b>";
		$eng4="mixture";
		
		
	}
	else
	{
		echo "677-Неверно.";
	}
	if (@$_REQUEST['eng5']=="ointment")
	
	{
		echo "<b> 677.Мазь, протирание:ointment</b>";
		$eng5="ointment";
		
		
	}
	else
	{
		echo "678-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="operation")
	
	{
		echo "<b> 678.Операция: operation</b>";
		$eng6="operation";
		
		
	}
	else
	{
		echo "679.Неверно.";
	}
if (@$_REQUEST['eng7']=="pill/tablet")
	
	{
		echo "<b> 679.Пилюля/таблетка: pill/tablet";
		$eng7="pill/tablet";
		
		
	}
	else
	{
		echo "673-Неверно.";
	}
	
	
}
?>
<br>
Лечение:
</b>


















673.inoculation
674.operation
675.mixture
676.massage
677.ointment
678.injection
679.pill/tablet


















































<form action="25-3.php" method="post">
<p>
Инъекция:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Прививка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Массаж:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Микстура:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Мазь,притирания:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Операция:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Пилюля/таблетка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="injection" && @$_REQUEST['eng2']=="inoculation" && @$_REQUEST['eng3']=="massage" && @$_REQUEST['eng4']=="mixture" && @$_REQUEST['eng5']=="ointment" && @$_REQUEST['eng6']=="operation" && @$_REQUEST['eng7']=="pill/tablet"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-4.php'>25 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>