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
	
	
	if (@$_REQUEST['eng1']=="internal aerial")
	
	{
		echo "<b> 827.Комнатная антена: internal aerial</b>";
		$eng1="internal aerial";
	}
	else
	{
		echo "827-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="community aerial")
	
	{
		echo "<b> 828.Коллективная антена:community aerial</b>";
	
		$eng2="community aerial";
	}
	else
	{
		echo "828-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="dish aerial")
	
	{
			echo "<b> 829.Телефон:dish aerial</b>";
	
		$eng3="dish aerial";
		
		
	}
	else
	{
		echo "829-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="broadcast")
	
	{
		echo "<b> 830.Радио, радиовещание: broadcast</b>";
		$eng4="broadcast";
		
		
	}
	else
	{
		echo "830-Неверно.";
	}
	if (@$_REQUEST['eng5']=="carry a broadcast")
	
	{
		echo "<b> 831.Передовать программы:carry a broadcast</b>";
		$eng5="carry a broadcast";
		
		
	}
	else
	{
		echo "831-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="live broadcast")
	
	{
		echo "<b> 832.Ксерокс:live broadcast</b>";
		$eng6="live broadcast";
		
		
	}
	else
	{
		echo "832.Неверно.";
	}
if (@$_REQUEST['eng7']=="TV broadcast")
	
	{
		echo "<b> 833.Телевидение, телевезионное вещание: TV broadcast";
		$eng7="TV broadcast";
		
		
	}
	else
	{
		echo "833-Неверно.";
	}
	
	
}
?>
<br>
Средство массовой информации
</b>








































827.community aerial
828.internal aerial
829.broadcast
830.dish aerial 
831.live broadcast
832.carry a broadcast
833.TV broadcast


















































<form action="31-1.php" method="post">
<p>
Комнатная антена:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Коллективная антена:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Параболическая антена:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Радио, радиовещание:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Передавать программы:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Прямой эфир:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Телевиденье, телевезионное вещание:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="internal aerial" && @$_REQUEST['eng2']=="community aerial" && @$_REQUEST['eng3']=="dish aerial" && @$_REQUEST['eng4']=="broadcast" && @$_REQUEST['eng5']=="carry a broadcast" && @$_REQUEST['eng6']=="live broadcast" && @$_REQUEST['eng7']=="TV broadcast"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/31-2.php'>31 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>