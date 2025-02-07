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
	
	
	if (@$_REQUEST['eng1']=="play")
	
	{
		echo "<b> 1056.Пьеса: play</b>";
		$eng1="play";
	}
	else
	{
		echo "1056-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="playgoer")
	
	{
		echo "<b> 1057.Театрал: playgoer</b>";
	
		$eng2="playgoer";
	}
	else
	{
		echo "1057-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="producer")
	
	{
			echo "<b> 1058.Продюсер: producer</b>";
	
		$eng3="producer";
		
		
	}
	else
	{
		echo "1058-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="puppet show")
	
	{
		echo "<b> 1059.Кукольный театр: puppet show</b>";
		$eng4="puppet show";
		
		
	}
	else
	{
		echo "1059-Неверно.";
	}
	if (@$_REQUEST['eng5']=="repertoire")
	
	{
		echo "<b> 1059.Репертуар: repertoire</b>";
		$eng5="repertoire";
		
		
	}
	else
	{
		echo "1059-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="revue")
	
	{
		echo "<b> 1061.Обозрение,ревю:revue</b>";
		$eng6="revue";
		
		
	}
	else
	{
		echo "1061.Неверно.";
	}
if (@$_REQUEST['eng7']=="spectator")
	
	{
		echo "<b> 1062.Зритель:spectator";
		$eng7="spectator";
		
		
	}
	else
	{
		echo "1062-Неверно.";
	}
	
	
}
?>
<br>
Развлечения
</b>























































1049.play
1050.producer
1051.reportoire
1052.pupet show
1053.revue
1054.playgoer
1055.spectator

















































<form action="39-1.php" method="post">
<p>
Пьеса:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Театрал:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Продюсер:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Кукольный театр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Репертуар:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Обозрение, ревю:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Зритель:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="play" && @$_REQUEST['eng2']=="playgoer" && @$_REQUEST['eng3']=="producer" && @$_REQUEST['eng4']=="puppet show" && @$_REQUEST['eng5']=="repertoire" && @$_REQUEST['eng6']=="revu" && @$_REQUEST['eng7']=="spectator"){
echo "<h2>Кто-то сегодня молодец. Ты сегодня молодец. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/39-2.php'>39 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>