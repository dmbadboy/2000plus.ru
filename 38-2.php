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
	
	
	if (@$_REQUEST['eng1']=="trolley-bus")
	
	{
		echo "<b> 1035.Троллейбус: trolley-bus</b>";
		$eng1="trolley-bus";
	}
	else
	{
		echo "1035-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="underground/subway")
	
	{
		echo "<b> 1036.Метро: underground/subway</b>";
	
		$eng2="underground/subway";
	}
	else
	{
		echo "1036-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="actor")
	
	{
			echo "<b> 1037.Актёр: actor</b>";
	
		$eng3="actor";
		
		
	}
	else
	{
		echo "1037-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="actress")
	
	{
		echo "<b> 1038.Актриса: actress</b>";
		$eng4="actress";
		
		
	}
	else
	{
		echo "1038-Неверно.";
	}
	if (@$_REQUEST['eng5']=="admirer")
	
	{
		echo "<b> 1039.Поклонник: admirer</b>";
		$eng5="admirer";
		
		
	}
	else
	{
		echo "1039-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="applause")
	
	{
		echo "<b> 1040.Аплодисменты:applause</b>";
		$eng6="applause";
		
		
	}
	else
	{
		echo "1040.Неверно.";
	}
if (@$_REQUEST['eng7']=="auditorium")
	
	{
		echo "<b> 1041.Зрительный зал:auditorium";
		$eng7="auditorium";
		
		
	}
	else
	{
		echo "1041-Неверно.";
	}
	
	
}
?>
<br>
Транспорт, развлечения
</b>























































1035.trolley-bus
1036.actor
1037.admirer
1038.actress
1039.applause
1040.underground/subway
1041.auditorium

















































<form action="38-2.php" method="post">
<p>
Троллейбус:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Метро:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Актёр:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Актриса:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Поклонник:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Аплодисменты:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Зрительный зал:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="trolley-bus" && @$_REQUEST['eng2']=="underground/subway" && @$_REQUEST['eng3']=="actor" && @$_REQUEST['eng4']=="actress" && @$_REQUEST['eng5']=="admirer" && @$_REQUEST['eng6']=="applause" && @$_REQUEST['eng7']=="auditorium"){
echo "<h2>Кто-то сегодня стал умнее и выучил 7 слов. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/38-3.php'>38 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>