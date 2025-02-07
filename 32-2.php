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
	
	
	if (@$_REQUEST['eng1']=="headline")
	
	{
		echo "<b> 862.Заголовок: headline</b>";
		$eng1="headline";
	}
	else
	{
		echo "862-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="interview")
	
	{
		echo "<b> 863.Интервью: interview</b>";
	
		$eng2="interview";
	}
	else
	{
		echo "863-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="issue")
	
	{
			echo "<b> 864.Выпуск,издание:issue</b>";
	
		$eng3="issue";
		
		
	}
	else
	{
		echo "864-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="journal")
	
	{
		echo "<b> 865.Журнал (научно-популярный, общественно-политический и т.п.) :journal</b>";
		$eng4="journal";
		
		
	}
	else
	{
		echo "865-Неверно.";
	}
	if (@$_REQUEST['eng5']=="journalist")
	
	{
		echo "<b> 866.Журналист: journalist</b>";
		$eng5="journalist";
		
		
	}
	else
	{
		echo "866-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="magazine")
	
	{
		echo "<b> 867.(переодический) Журнал:magazine</b>";
		$eng6="magazine";
		
		
	}
	else
	{
		echo "867.Неверно.";
	}
if (@$_REQUEST['eng7']=="fashion magazine")
	
	{
		echo "<b> 868.Модный журнал:fashion magazine";
		$eng7="fashion magazine";
		
		
	}
	else
	{
		echo "868-Неверно.";
	}
	
	
}
?>
<br>
Пресса
</b>













































863.interview
862.headline
864.issue
866.journalist
865.journal
868.fashion magazine
867.magazine

















































<form action="32-2.php" method="post">
<p>
Заголовок:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Интервью:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Выпуск, издание:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Журнал (научно-популярный, общественно-политический и т.п):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Журналист:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
(переодический) журнал:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Модный журнал:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="headline" && @$_REQUEST['eng2']=="interview" && @$_REQUEST['eng3']=="issue" && @$_REQUEST['eng4']=="journal" && @$_REQUEST['eng5']=="journalist" && @$_REQUEST['eng6']=="magazine" && @$_REQUEST['eng7']=="fashion magazine"){
echo "<h2>Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/32-3.php'>32 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>