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
	
	
	if (@$_REQUEST['eng1']=="dance")
	
	{
		echo "<b> 1112.Танец: dance</b>";
		$eng1="dance";
	}
	else
	{
		echo "1112-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="falsetto")
	
	{
		echo "<b> 1113.Фальцет: falsetto</b>";
	
		$eng2="falsetto";
	}
	else
	{
		echo "1113-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="jazz band")
	
	{
			echo "<b> 1114.Джазовый оркестр: jazz band</b>";
	
		$eng3="jazz band";
		
		
	}
	else
	{
		echo "1114-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="music")
	
	{
		echo "<b> 1115.Музыка:music</b>";
		$eng4="music";
		
		
	}
	else
	{
		echo "1115-Неверно.";
	}
	if (@$_REQUEST['eng5']=="musician")
	
	{
		echo "<b> 1116.Музыкант: musician</b>";
		$eng5="musician";
		
		
	}
	else
	{
		echo "1116-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="opera")
	
	{
		echo "<b> 1117.Опера, opera</b>";
		$eng6="opera";
		
		
	}
	else
	{
		echo "1117.Неверно.";
	}
if (@$_REQUEST['eng7']=="operetta")
	
	{
		echo "<b> 1118.Оперетта: contralto";
		$eng7="operetta";
		
		
	}
	else
	{
		echo "1118-Неверно.";
	}
	
	
}
?>
<br>
Музыка
</b>























































1112.dance
1113.jazz band
1114.musician
1115.nusic
1116.opera
1117.falsetto
1118.operetta

















































<form action="41-1.php" method="post">
<p>
Танец:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Фальцет:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Джазовый аркестр:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Музыка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Музыкант:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Опера:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Оперетта:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="dance" && @$_REQUEST['eng2']=="falsetto" && @$_REQUEST['eng3']=="jazz band" && @$_REQUEST['eng4']=="music" && @$_REQUEST['eng5']=="musician" && @$_REQUEST['eng6']=="opera" && @$_REQUEST['eng7']=="operetta"){
echo "<h2>Кто-то сегодня стал умнее и выучил 7 новых слов. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/41-2.php'>41 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>