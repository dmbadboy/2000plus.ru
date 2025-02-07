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
	
	
	if (@$_REQUEST['eng1']=="archestra")
	
	{
		echo "<b> 1119.Оркестр: archestra</b>";
		$eng1="archestra";
	}
	else
	{
		echo "1119-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dance archestra")
	
	{
		echo "<b> 1120.Эстрадный аркестр: dance archestra</b>";
	
		$eng2="dance archestra";
	}
	else
	{
		echo "1120-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="string archestra")
	
	{
			echo "<b> 1121.Струнный оркестр: string archestra</b>";
	
		$eng3="string archestra";
		
		
	}
	else
	{
		echo "1121-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="symphony archestra")
	
	{
		echo "<b> 1122.Симфонический аркестр:symphony archestra</b>";
		$eng4="symphony archestra";
		
		
	}
	else
	{
		echo "1122-Неверно.";
	}
	if (@$_REQUEST['eng5']=="song")
	
	{
		echo "<b> 1123.Звук: song</b>";
		$eng5="song";
		
		
	}
	else
	{
		echo "1123-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="soprano")
	
	{
		echo "<b> 1124.Сопрано: soprano</b>";
		$eng6="soprano";
		
		
	}
	else
	{
		echo "1124.Неверно.";
	}
if (@$_REQUEST['eng7']=="soundtrack")
	
	{
		echo "<b> 1125.Фонограмма: soundtrack";
		$eng7="soundtrack";
		
		
	}
	else
	{
		echo "1125-Неверно.";
	}
	
	
}
?>
<br>
Музыка
</b>























































1119.archestra
1120.string archestra
1121.song
1122.symphony archestra
1123.soprano
1124.dance archestra
1125.soundtrack

















































<form action="41-2.php" method="post">
<p>
Оркестр:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Эстрадный оркестр:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Струнный оркестр:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Симфонический оркестр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Песня:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сопрано:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Фонограмма:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="archestra" && @$_REQUEST['eng2']=="dance archestra" && @$_REQUEST['eng3']=="string archestra" && @$_REQUEST['eng4']=="symphony archestra" && @$_REQUEST['eng5']=="song" && @$_REQUEST['eng6']=="soprano" && @$_REQUEST['eng7']=="soundtrack"){
echo "<h2>Кто-то сегодня сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/41-3.php'>41 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>