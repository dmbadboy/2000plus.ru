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
	
	
	if (@$_REQUEST['eng1']=="scene")
	
	{
		echo "<b> 1063.Сцена: scene</b>";
		$eng1="scene";
	}
	else
	{
		echo "1063-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="behind the scenes")
	
	{
		echo "<b> 1064.Театрал: behind the scenes</b>";
	
		$eng2="behind the scenes";
	}
	else
	{
		echo "1064-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="stage")
	
	{
			echo "<b> 1065.Сцена: stage</b>";
	
		$eng3="stage";
		
		
	}
	else
	{
		echo "1065-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="stage director")
	
	{
		echo "<b> 1065.Режессёр: stage dirctor</b>";
		$eng4="stage director";
		
		
	}
	else
	{
		echo "1065-Неверно.";
	}
	if (@$_REQUEST['eng5']=="stalls")
	
	{
		echo "<b> 1066.Партер: stalls</b>";
		$eng5="stalls";
		
		
	}
	else
	{
		echo "1066-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="centre stalls")
	
	{
		echo "<b> 1068.Места в середине партера:centre stalls</b>";
		$eng6="centre stalls";
		
		
	}
	else
	{
		echo "1068.Неверно.";
	}
if (@$_REQUEST['eng7']=="orchestra stalls")
	
	{
		echo "<b> 1069.Первые ряды партера:orchestra stalls";
		$eng7="orchestra stalls";
		
		
	}
	else
	{
		echo "1069-Неверно.";
	}
	
	
}
?>
<br>
Развлечения
</b>























































1063.scene
1064.stage director
1065.stage
1066.stalls
1067.centre stalls 
1068.behind the scene
1069.orchestra stalls 

















































<form action="39-2.php" method="post">
<p>
Сцена:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
За кулисами:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Сцена:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Режиссёр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Партер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Место в середине партера:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Первые ряды партера:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="scene" && @$_REQUEST['eng2']=="behind the scenes" && @$_REQUEST['eng3']=="stage" && @$_REQUEST['eng4']=="stage director" && @$_REQUEST['eng5']=="stalls" && @$_REQUEST['eng6']=="centre stalls" && @$_REQUEST['eng7']=="orchestra stalls"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/39-3.php'>39 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>