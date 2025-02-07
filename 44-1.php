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
	
	
	if (@$_REQUEST['eng1']=="cup")
	
	{
		echo "<b> 1196.Кубок: cup</b>";
		$eng1="cup";
	}
	else
	{
		echo "1196-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="world cup")
	
	{
		echo "<b> 1197.Кубок мира: world cup</b>";
	
		$eng2="world cup";
	}
	else
	{
		echo "1197-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="defeat")
	
	{
			echo "<b> 1198.Поражение: defeat</b>";
	
		$eng3="defeat";
		
		
	}
	else
	{
		echo "1198-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="disqualification")
	
	{
		echo "<b> 1199.Дисквалификация:disqualification</b>";
		$eng4="disqualification";
		
		
	}
	else
	{
		echo "1199-Неверно.";
	}
	if (@$_REQUEST['eng5']=="finish")
	
	{
		echo "<b> 1200.Финиш: finish</b>";
		$eng5="finish";
		
		
	}
	else
	{
		echo "1200-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="game")
	
	{
		echo "<b> 1201.Игра: game</b>";
		$eng6="game";
		
		
	}
	else
	{
		echo "1201.Неверно.";
	}
if (@$_REQUEST['eng7']=="drawn game")
	
	{
		echo "<b> 1202.Ничья: drawn game";
		$eng7="drawn game";
		
		
	}
	else
	{
		echo "1202-Неверно.";
	}
	
	
}
?>
<br>
Спорт
</b>























































1196.cup
1197.defeat
1198.finish
1199.disqualification
1200.game
1201.world cup
1202.drawn game















































<form action="44-1.php" method="post">
<p>
Кубок:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кубок Мира:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Поражение, проигрыш:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Дисквалификация:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Финиш:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Игра, партия:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Ничья:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cup" && @$_REQUEST['eng2']=="world cup" && @$_REQUEST['eng3']=="defeat" && @$_REQUEST['eng4']=="disqualification" && @$_REQUEST['eng5']=="finish" && @$_REQUEST['eng6']=="game" && @$_REQUEST['eng7']=="drawn game"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/44-2.php'>44 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>