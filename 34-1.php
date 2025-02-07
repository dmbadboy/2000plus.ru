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
	
	
	if (@$_REQUEST['eng1']=="line")
	
	{
		echo "<b> 910.Линия связи: line</b>";
		$eng1="line";
	}
	else
	{
		echo "910-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="to be on the line")
	
	{
		echo "<b> 911.Быть на проводе: to be on the line</b>";
	
		$eng2="to be on the line";
	}
	else
	{
		echo "911-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="The line is engaged")
	
	{
			echo "<b> 912.Линия занята:The line is engaged</b>";
	
		$eng3="The line is engaged";
		
		
	}
	else
	{
		echo "912-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="Hold the line")
	
	{
		echo "<b> 913.Не вешайте трубку:Hold the line</b>";
		$eng4="Hold the line";
		
		
	}
	else
	{
		echo "913-Неверно.";
	}
	if (@$_REQUEST['eng5']=="long-distance line")
	
	{
		echo "<b> 914.Пейджер: long-distance line</b>";
		$eng5="long-distance line";
		
		
	}
	else
	{
		echo "914-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="receiver")
	
	{
		echo "<b> 915.Телефонная трубка:receiver</b>";
		$eng6="receiver";
		
		
	}
	else
	{
		echo "915.Неверно.";
	}
if (@$_REQUEST['eng7']=="ring up/call")
	
	{
		echo "<b> 916.Звонить по телефону:ring up/call";
		$eng7="ring up/call";
		
		
	}
	else
	{
		echo "916-Неверно.";
	}
	
	
}
?>
<br>
Телефон
</b>




















































916.to be on the line
917.long-distance line
918.The line is engaged
919.receiver
920.Hold the line
921.line
922.ring up/call

















































<form action="34-1.php" method="post">
<p>
Линия связи:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Быть на проводе:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Линия занята:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Не вешайте трубку:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Междугородная линия:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Телефонная трубка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Звонить по телефону:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="line" && @$_REQUEST['eng2']=="to be on the line" && @$_REQUEST['eng3']=="The line is engaged" && @$_REQUEST['eng4']=="Hold the line" && @$_REQUEST['eng5']=="long-distance line" && @$_REQUEST['eng6']=="receiver" && @$_REQUEST['eng7']=="ring up/call"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/34-2.php'>34 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>