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
	
	
	if (@$_REQUEST['eng1']=="channel")
	
	{
		echo "<b> 834.Канал (телевезионный, радио): channel</b>";
		$eng1="channel";
	}
	else
	{
		echo "834-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="change channels")
	
	{
		echo "<b> 835.Переключить на другой канал:change channels</b>";
	
		$eng2="change channels";
	}
	else
	{
		echo "835-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="episode")
	
	{
			echo "<b> 836.Серия:episode</b>";
	
		$eng3="episode";
		
		
	}
	else
	{
		echo "836-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="news")
	
	{
		echo "<b> 837.Известия, новости: news</b>";
		$eng4="news";
		
		
	}
	else
	{
		echo "837-Неверно.";
	}
	if (@$_REQUEST['eng5']=="newsflash")
	
	{
		echo "<b> 838.Короткое экстренное сообщение:newsflash</b>";
		$eng5="newsflash";
		
		
	}
	else
	{
		echo "838-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="newsreader")
	
	{
		echo "<b> 839.Диктор программы новостей:newsreader</b>";
		$eng6="newsreader";
		
		
	}
	else
	{
		echo "839.Неверно.";
	}
if (@$_REQUEST['eng7']=="presenter")
	
	{
		echo "<b> 840.Ведущий( на радио и телевидении): presenter";
		$eng7="presenter";
		
		
	}
	else
	{
		echo "840-Неверно.";
	}
	
	
}
?>
<br>
Средство массовой информации
</b>









































834.change channels
835.newsflash
836.news
837.episode
838.newsreader
839.channel
840.presenter


















































<form action="31-2.php" method="post">
<p>
Канал (телевезионный, радио):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Переключить на другой канал:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Серия:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Известия, новости:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Короткое экстренное сообщение:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Диктор программы новостей:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Ведущий (на радио или телевиденьи):<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="channel" && @$_REQUEST['eng2']=="change channels" && @$_REQUEST['eng3']=="episode" && @$_REQUEST['eng4']=="news" && @$_REQUEST['eng5']=="newsflash" && @$_REQUEST['eng6']=="newsreader" && @$_REQUEST['eng7']=="presenter"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/31-3.php'>31 день: 3урок</a>";
	}	
}
	

?>
</body>
</html>