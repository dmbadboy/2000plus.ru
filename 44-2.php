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
	
	
	if (@$_REQUEST['eng1']=="Olympic Games")
	
	{
		echo "<b> 1203.Олимпийские игры: Olympic Games</b>";
		$eng1="Olympic Games";
	}
	else
	{
		echo "1203-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="goal")
	
	{
		echo "<b> 1204.Гол: goal</b>";
	
		$eng2="goal";
	}
	else
	{
		echo "1204-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="medal")
	
	{
			echo "<b> 1205.Медаль: medal</b>";
	
		$eng3="medal";
		
		
	}
	else
	{
		echo "1205-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="bronze medal")
	
	{
		echo "<b> 1206.Бронзовая медаль:bronze medal</b>";
		$eng4="bronze medal";
		
		
	}
	else
	{
		echo "1206-Неверно.";
	}
	if (@$_REQUEST['eng5']=="gold medal")
	
	{
		echo "<b> 1207.Золотая медаль: gold medal</b>";
		$eng5="gold medal";
		
		
	}
	else
	{
		echo "1207-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="silver medal")
	
	{
		echo "<b> 1208.Серебряная медаль: silver medal</b>";
		$eng6="silver medal";
		
		
	}
	else
	{
		echo "1208.Неверно.";
	}
if (@$_REQUEST['eng7']=="penalty kick")
	
	{
		echo "<b> 1209.Штрафной удар, пенальти: penalty kick";
		$eng7="penalty kick";
		
		
	}
	else
	{
		echo "1209-Неверно.";
	}
	
	
}
?>
<br>
Спорт
</b>























































1203.Olympic Games
1204.medal
1205.gold medal
1206.bronze medal
1207.silver medal
1208.goal
1209.penalty kick















































<form action="44-2.php" method="post">
<p>
Олимпийские игры:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Гол:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Медаль:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Бронзовая медаль:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Золотая медаль:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Серебряная медаль:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Штрафной удар, пенальти:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="Olympic Games" && @$_REQUEST['eng2']=="goal" && @$_REQUEST['eng3']=="medal" && @$_REQUEST['eng4']=="bronze medal" && @$_REQUEST['eng5']=="gold medal" && @$_REQUEST['eng6']=="silver medal" && @$_REQUEST['eng7']=="penalty kick"){
echo "<h2>Кто-то сегодня стал умнее и выучил 7 новых слов. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/44-3.php'>44 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>