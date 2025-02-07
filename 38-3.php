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
	
	
	if (@$_REQUEST['eng1']=="balcony")
	
	{
		echo "<b> 1042.Балкон: balcony</b>";
		$eng1="balcony";
	}
	else
	{
		echo "1042-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="box")
	
	{
		echo "<b> 1043.Ложа: boxb>";
	
		$eng2="box";
	}
	else
	{
		echo "1043-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="box office")
	
	{
			echo "<b> 1044.Театральная касса: box office</b>";
	
		$eng3="box office";
		
		
	}
	else
	{
		echo "1044-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="cloakroom")
	
	{
		echo "<b> 1045.Гардероб: cloakroom</b>";
		$eng4="cloakroom";
		
		
	}
	else
	{
		echo "1045-Неверно.";
	}
	if (@$_REQUEST['eng5']=="curtain")
	
	{
		echo "<b> 1045.Занавес: curtain</b>";
		$eng5="curtin";
		
		
	}
	else
	{
		echo "1045-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="dress circle")
	
	{
		echo "<b> 1047.Аплодисменты:dress circle</b>";
		$eng6="dress circle";
		
		
	}
	else
	{
		echo "1047.Неверно.";
	}
if (@$_REQUEST['eng7']=="first night")
	
	{
		echo "<b> 1048.Премьера:first night";
		$eng7="first night";
		
		
	}
	else
	{
		echo "1048-Неверно.";
	}
	
	
}
?>
<br>
Развлечения
</b>























































1035.balcony
1037.box office
1039.curtain
1038.cloakroom
1040.dress circle
1036.box
1041.first night

















































<form action="38-3.php" method="post">
<p>
Балкон:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ложа:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Театральная касса:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Гардероб:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Занавес:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Бельэтаж:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Премьера:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="balcony" && @$_REQUEST['eng2']=="box" && @$_REQUEST['eng3']=="box office" && @$_REQUEST['eng4']=="cloakroom" && @$_REQUEST['eng5']=="curtain" && @$_REQUEST['eng6']=="dress circle" && @$_REQUEST['eng7']=="first night"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/38-4.php'>38 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>