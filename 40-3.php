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
	
	
	if (@$_REQUEST['eng1']=="melodrama")
	
	{
		echo "<b> 1098.Мелодрама: melodrama</b>";
		$eng1="melodrama";
	}
	else
	{
		echo "1098-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="newsreel")
	
	{
		echo "<b> 1099.Кинохроника: newsreel</b>";
	
		$eng2="newsreel";
	}
	else
	{
		echo "1099-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="producer")
	
	{
			echo "<b> 1100.Продюсер: producer</b>";
	
		$eng3="producer";
		
		
	}
	else
	{
		echo "1100-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="run")
	
	{
		echo "<b> 1101.Идти (о фильме):run </b>";
		$eng4="run";
		
		
	}
	else
	{
		echo "1101-Неверно.";
	}
	if (@$_REQUEST['eng5']=="have a long run")
	
	{
		echo "<b> 1102.Долго не сходить с экрана: have a lot run</b>";
		$eng5="have a lot run";
		
		
	}
	else
	{
		echo "1102-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="scenario")
	
	{
		echo "<b> 1103.Сценарий:scenario</b>";
		$eng6="scenario";
		
		
	}
	else
	{
		echo "1103.Неверно.";
	}
if (@$_REQUEST['eng7']=="subtitle")
	
	{
		echo "<b> 1104.Субтитры:subtitle";
		$eng7="subtitle";
		
		
	}
	else
	{
		echo "1104-Неверно.";
	}
	
	
}
?>
<br>
Кино
</b>























































1098.melodrama
1099.producer
1100.have a long run
1101.run
1102.scenario
1103.newsreel
1104.subtitle

















































<form action="40-3.php" method="post">
<p>
Мелодрама:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кинохроника:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Продюсер:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Идти( о фильме):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Долго не сходить с экрана:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сценарий:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Субтитр:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="melodrama" && @$_REQUEST['eng2']=="newsreel" && @$_REQUEST['eng3']=="producer" && @$_REQUEST['eng4']=="run" && @$_REQUEST['eng5']=="have a long run" && @$_REQUEST['eng6']=="scenario" && @$_REQUEST['eng7']=="subtitle"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/40-4.php'>40 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>