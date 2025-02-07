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
	
	
	if (@$_REQUEST['eng1']=="periodical")
	
	{
		echo "<b> 875.Периодическое издание: periodical</b>";
		$eng1="periodical";
	}
	else
	{
		echo "875-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="publish")
	
	{
		echo "<b> 876.Издавать, публиковать: publish</b>";
	
		$eng2="publish";
	}
	else
	{
		echo "876-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="be published/come out")
	
	{
			echo "<b> 877.Выходить в свет(о газете, журнале):be published/come out</b>";
	
		$eng3="be published/come out";
		
		
	}
	else
	{
		echo "877-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="subscription")
	
	{
		echo "<b> 878.Подписка( на газету и т.п.):subscription</b>";
		$eng4="subscription";
		
		
	}
	else
	{
		echo "878-Неверно.";
	}
	if (@$_REQUEST['eng5']=="subscribe to")
	
	{
		echo "<b> 879.Подписаться на: subscribe to</b>";
		$eng5="subscribe to";
		
		
	}
	else
	{
		echo "879-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="tabloid press")
	
	{
		echo "<b> 880.Бульварная пресса:tabloid press</b>";
		$eng6="tabloid press";
		
		
	}
	else
	{
		echo "880.Неверно.";
	}
if (@$_REQUEST['eng7']=="title")
	
	{
		echo "<b> 881.Название:title";
		$eng7="title";
		
		
	}
	else
	{
		echo "881-Неверно.";
	}
	
	
}
?>
<br>
Пресса
</b>















































876.publish
875.periodical

878.subscription
877.be published/ come out

880.tabloid press
879.subscribe to
881.title

















































<form action="32-4.php" method="post">
<p>
Периодическое издание:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Издавать, выпускать:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Выходить в свет (о газете, журнале):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Подписка (на газету и т.п):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Подписаться на:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Бульварная пресса:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Название:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="periodical" && @$_REQUEST['eng2']=="publish" && @$_REQUEST['eng3']=="be published/come out" && @$_REQUEST['eng4']=="subscription" && @$_REQUEST['eng5']=="subscribe to" && @$_REQUEST['eng6']=="tabloid press" && @$_REQUEST['eng7']=="title"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/33-1.php'>33 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>