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
	
	
	if (@$_REQUEST['eng1']=="school")
	
	{
		echo "<b> 778.школа: school</b>";
		$eng1="school";
	}
	else
	{
		echo "778-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="comprehensive school")
	
	{
		echo "<b> 779.Общеоброзовательная школа:comprehensive school</b>";
	
		$eng2="comprehensive school";
	}
	else
	{
		echo "779-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="primary school")
	
	{
			echo "<b> 780.Начальная школа:primary school</b>";
	
		$eng3="primary school";
		
		
	}
	else
	{
		echo "780-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="private school")
	
	{
		echo "<b> 781.Частная школа: private school</b>";
		$eng4="private school";
		
		
	}
	else
	{
		echo "781-Неверно.";
	}
	if (@$_REQUEST['eng5']=="secondary school")
	
	{
		echo "<b> 782.Средняя школа:secondary school</b>";
		$eng5="secondary school";
		
		
	}
	else
	{
		echo "782-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="specialized school")
	
	{
		echo "<b> 783.Училище: specialized school</b>";
		$eng6="specialized school";
		
		
	}
	else
	{
		echo "783.Неверно.";
	}
if (@$_REQUEST['eng7']=="technical secondary school")
	
	{
		echo "<b> 784.Техникум: technical secondary school";
		$eng7="technical secondary school";
		
		
	}
	else
	{
		echo "784-Неверно.";
	}
	
	
}
?>
<br>
Образовательное учреждение
</b>

































779.comprehensive school
778.school
781.private school
780.primary school
783.specialized school
782.secondary school
784.technical secondary school


















































<form action="29-2.php" method="post">
<p>
Школа:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Общеоброзовательная школа:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Начальная школа:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Частная школа:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Средняя школа:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Училище:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Техникум:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="school" && @$_REQUEST['eng2']=="comprehensive school" && @$_REQUEST['eng3']=="primary school" && @$_REQUEST['eng4']=="private school" && @$_REQUEST['eng5']=="secondary school" && @$_REQUEST['eng6']=="specialized school" && @$_REQUEST['eng7']=="technical secondary school"){
echo "<h2>Кто сегодня молодец? Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/29-3.php'>29 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>