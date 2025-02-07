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
if (@$_REQUEST['eng1']=="baby")
	
	{
		echo "<b> 106.Младенец, ребёнок(который ещё не умеет ходить и говорить): baby</b>";
	
		$eng1="baby";
	}
	else
	{
		echo "106-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="boy")
	
	{
		echo "<b> 107.Мальчик: boy</b>";
		$eng2="boy";
	}
	else
	{
		echo "107-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="elderly")
	
	{
		echo "<b> 108.Пожилой:elderly</b>";
		$eng3="elderly";
	}
	else
	{
		echo "108-Неверно.";
	}
	if (@$_REQUEST['eng4']=="generation")
	
	{
		echo "<b> 109.Поколение: generation</b>";
		$eng4="generation";
	}
	else
	{
		echo "109-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="girl")
	
	{
		echo "<b> 110.Девочка :girl</b>";
		$eng5="girl";
	}
	else
	{
		echo "110-Неверно.";
	}
if (@$_REQUEST['eng6']=="infant")
	
	{
		echo "<b> 111.Ребёнок(до 7 лет): infant</b>";
		$eng6="infant";
	}
	else
	{
		echo "111-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="man")
	
	{
		echo "<b> 112.Мужчина: man</b>";
		$eng7="man";
	}
	else
	{
		echo "112-неверно";
	}
	
}
?>
<br>
Возвраст человека:


106.generation
107.baby
108.elderly
109.man
110.boy
111.girl
112.infant






















<form action="5-1.php" method="post">
<p>
Младенец, ребёнок(который ещё не умеет ходить и говорить):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Мальчик:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пожилой:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Поколение:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Девочка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ребёнок(до 7 лет):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Мужчина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="baby" && @$_REQUEST['eng2']=="boy" && @$_REQUEST['eng3']=="elderly" && @$_REQUEST['eng4']=="generation" && @$_REQUEST['eng5']=="girl" && @$_REQUEST['eng6']=="infant" && @$_REQUEST['eng7']=="man"){
echo "<h2>Замечательно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/5-2.php'>5 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>