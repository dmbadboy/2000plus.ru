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
	
	
	if (@$_REQUEST['eng1']=="troupe")
	
	{
		echo "<b> 1077.Труппа: troupe</b>";
		$eng1="troupe";
	}
	else
	{
		echo "1077-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="wing")
	
	{
		echo "<b> 1078.Кулиса: wing</b>";
	
		$eng2="wing";
	}
	else
	{
		echo "1078-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="animated cartoon")
	
	{
			echo "<b> 1079.Мультфильм: animated cartoon</b>";
	
		$eng3="animated cartoon";
		
		
	}
	else
	{
		echo "1079-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="camera man")
	
	{
		echo "<b> 1080.Оператор: camera man</b>";
		$eng4="camera man";
		
		
	}
	else
	{
		echo "1080-Неверно.";
	}
	if (@$_REQUEST['eng5']=="cinema poster")
	
	{
		echo "<b> 1081.Киноафиша: cinema poster</b>";
		$eng5="cinema poster";
		
		
	}
	else
	{
		echo "1081-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="comedy")
	
	{
		echo "<b> 1082.Комедия:comedy</b>";
		$eng6="comedy";
		
		
	}
	else
	{
		echo "1082.Неверно.";
	}
if (@$_REQUEST['eng7']=="director")
	
	{
		echo "<b> 1083.Кинорежиссёр-постановщик:director";
		$eng7="director";
		
		
	}
	else
	{
		echo "1083-Неверно.";
	}
	
	
}
?>
<br>
Развлечения,кино
</b>























































1077.troupe
1078.animated cartoon
1079.camera poster
1080.camera man
1081.comedy
1082.wing
1083.director

















































<form action="39-4.php" method="post">
<p>
Труппа:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кулиса:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Мультфильм:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Оператор:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Киноафиша:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Комедия:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кинорежиссёр-постановщик:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="troupe" && @$_REQUEST['eng2']=="wing" && @$_REQUEST['eng3']=="animated cartoon" && @$_REQUEST['eng4']=="camera man" && @$_REQUEST['eng5']=="cinema poster" && @$_REQUEST['eng6']=="comedy" && @$_REQUEST['eng7']=="director"){
echo "<h2>Кто сегодня молодец? Ты сегодня молодец. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/39-4.php'>39 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>