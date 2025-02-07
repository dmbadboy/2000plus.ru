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
	
	
	if (@$_REQUEST['eng1']=="basson")
	
	{
		echo "<b> 1133.Фагот: basson</b>";
		$eng1="basson";
	}
	else
	{
		echo "1133-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="clarinet")
	
	{
		echo "<b> 1134.Кларнет: ckarinet</b>";
	
		$eng2="clarinet";
	}
	else
	{
		echo "1134-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="contrabass")
	
	{
			echo "<b> 1135.Контрабас: contrabass</b>";
	
		$eng3="contrabass";
		
		
	}
	else
	{
		echo "1135-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="drum")
	
	{
		echo "<b> 1136.Барабан:drum</b>";
		$eng4="drum";
		
		
	}
	else
	{
		echo "1136-Неверно.";
	}
	if (@$_REQUEST['eng5']=="flute")
	
	{
		echo "<b> 1137.Флейта: flute</b>";
		$eng5="flute";
		
		
	}
	else
	{
		echo "1137-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="guitar")
	
	{
		echo "<b> 1138.Гитара: guitar</b>";
		$eng6="guitar";
		
		
	}
	else
	{
		echo "1138.Неверно.";
	}
if (@$_REQUEST['eng7']=="harp")
	
	{
		echo "<b> 1139.Арфа: harp";
		$eng7="harp";
		
		
	}
	else
	{
		echo "1139-Неверно.";
	}
	
	
}
?>
<br>
Музыка
</b>























































1126.basson
1128.contrabass
1130.flute
1129.drum
1121.guitar
1127.clarinet
1132.harp

















































<form action="41-4.php" method="post">
<p>
Фагот:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кларнет:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Контрабас:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Барабан:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Флейта:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Гитара:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Арфа:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="basson" && @$_REQUEST['eng2']=="clarinet" && @$_REQUEST['eng3']=="contrabass" && @$_REQUEST['eng4']=="drum" && @$_REQUEST['eng5']=="flute" && @$_REQUEST['eng6']=="guitar" && @$_REQUEST['eng7']=="harp"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/42-1.php'>42 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>