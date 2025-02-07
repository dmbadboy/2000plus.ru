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
	
	
	if (@$_REQUEST['eng1']=="rear stalls")
	
	{
		echo "<b> 1070.Задние ряды партера: rear atalls</b>";
		$eng1="rear stalls";
	}
	else
	{
		echo "1070-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="theatre")
	
	{
		echo "<b> 1071.Театр: theatre</b>";
	
		$eng2="theatre";
	}
	else
	{
		echo "1071-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="arts theatre")
	
	{
			echo "<b> 1072.Художественный театр: arts theatre</b>";
	
		$eng3="arts theatre";
		
		
	}
	else
	{
		echo "1072-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="drama theatre")
	
	{
		echo "<b> 1072.Драматический театр: drama theatre</b>";
		$eng4="drama theatre";
		
		
	}
	else
	{
		echo "1072-Неверно.";
	}
	if (@$_REQUEST['eng5']=="operetta theatre")
	
	{
		echo "<b> 1073.Театр оперетты: operetta theatre</b>";
		$eng5="operetta theatre";
		
		
	}
	else
	{
		echo "1073-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="ticket")
	
	{
		echo "<b> 1075.Билет:ticket</b>";
		$eng6="ticket";
		
		
	}
	else
	{
		echo "1075.Неверно.";
	}
if (@$_REQUEST['eng7']=="ticket collector")
	
	{
		echo "<b> 1076.Билетёр:ticket collector";
		$eng7="ticket collector";
		
		
	}
	else
	{
		echo "1076-Неверно.";
	}
	
	
}
?>
<br>
Развлечения
</b>























































1070.rear stalls
1071.theatre arts
1072.theatre operetta
1073.theatre drama
1074.ticket
1075.theatre
1076.ticket collector

















































<form action="39-3.php" method="post">
<p>
Заднее место партнера:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Театр:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Художественный театр:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Драматический театр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Театр оперетты:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Билет:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Билетёр:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="rear stalls" && @$_REQUEST['eng2']=="theatre" && @$_REQUEST['eng3']=="arts theatre" && @$_REQUEST['eng4']=="drama theatre" && @$_REQUEST['eng5']=="operetta theatre" && @$_REQUEST['eng6']=="ticket" && @$_REQUEST['eng7']=="ticket collector"){
echo "<h2>Кто-то сегодня молодец. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/40-1.php'>40 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>