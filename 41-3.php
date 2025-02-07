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
	
	
	if (@$_REQUEST['eng1']=="symphony")
	
	{
		echo "<b> 1126.Симфония: symphony</b>";
		$eng1="symphony";
	}
	else
	{
		echo "1126-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="tenor")
	
	{
		echo "<b> 1127.Тенорр: tenor</b>";
	
		$eng2="tenor";
	}
	else
	{
		echo "1127-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="variety show")
	
	{
			echo "<b> 1128.Варьете,эстрадный концерт: variety show</b>";
	
		$eng3="variety show";
		
		
	}
	else
	{
		echo "1128-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="accordion")
	
	{
		echo "<b> 1129.Аккордион:accordion</b>";
		$eng4="accordion";
		
		
	}
	else
	{
		echo "1129-Неверно.";
	}
	if (@$_REQUEST['eng5']=="accordion button")
	
	{
		echo "<b> 1130.Баян: accordion button</b>";
		$eng5="accordion button";
		
		
	}
	else
	{
		echo "1130-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="alto")
	
	{
		echo "<b> 1131.Альт: alto</b>";
		$eng6="alto";
		
		
	}
	else
	{
		echo "1131.Неверно.";
	}
if (@$_REQUEST['eng7']=="balalaika")
	
	{
		echo "<b> 1132.Балалайка: balalaika";
		$eng7="balalalaika";
		
		
	}
	else
	{
		echo "1132-Неверно.";
	}
	
	
}
?>
<br>
Музыка
</b>























































1126.symphony
1127.variety show
1128.button accordion
1129.accordion
1130.alto
1121.tenor
1132.balalaika

















































<form action="41-3.php" method="post">
<p>
Симфония:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Тенор:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Варьете, эстрадный танец:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Аккордион:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Баян:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Альт:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Балалайка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="symphony" && @$_REQUEST['eng2']=="tenor" && @$_REQUEST['eng3']=="variety show" && @$_REQUEST['eng4']=="accordion" && @$_REQUEST['eng5']=="accordion button" && @$_REQUEST['eng6']=="alto" && @$_REQUEST['eng7']=="balalaika"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/41-4.php'>41 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>