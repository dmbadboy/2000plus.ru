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
	
	
	if (@$_REQUEST['eng1']=="piano")
	
	{
		echo "<b> 1140.Фортопиано: piano</b>";
		$eng1="piano";
	}
	else
	{
		echo "1140-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="saxophone")
	
	{
		echo "<b> 1141.Саксафон: saxophone</b>";
	
		$eng2="saxophone";
	}
	else
	{
		echo "1141-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="synthesizer")
	
	{
			echo "<b> 1142.Синтезатор: synthesizer</b>";
	
		$eng3="synthesizer";
		
		
	}
	else
	{
		echo "1142-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="trombone")
	
	{
		echo "<b> 1143.Тромбон:trombone</b>";
		$eng4="trombone";
		
		
	}
	else
	{
		echo "1143-Неверно.";
	}
	if (@$_REQUEST['eng5']=="violin")
	
	{
		echo "<b> 1144.Скрипка: violin</b>";
		$eng5="violin";
		
		
	}
	else
	{
		echo "1144-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="violoncello")
	
	{
		echo "<b> 1145.Виолончель: violoncello</b>";
		$eng6="violoncello";
		
		
	}
	else
	{
		echo "1145.Неверно.";
	}
if (@$_REQUEST['eng7']=="art")
	
	{
		echo "<b> 1146.Искусство: art";
		$eng7="art";
		
		
	}
	else
	{
		echo "1146-Неверно.";
	}
	
	
}
?>
<br>
Музыка, художественное искусство
</b>























































1133.piano
1134.synthesizer
1135.violoncello
1136.trombone
1137.violin
1138.saxophone
1139.art

















































<form action="42-1.php" method="post">
<p>
Пиано:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Саксафон:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Синтезатор:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Тромбон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Скрипка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Виолончель:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Искусство:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="piano" && @$_REQUEST['eng2']=="saxophone" && @$_REQUEST['eng3']=="synthesizer" && @$_REQUEST['eng4']=="trombone" && @$_REQUEST['eng5']=="violin" && @$_REQUEST['eng6']=="violoncello" && @$_REQUEST['eng7']=="art"){
echo "<h2>Кто-то сегодня стал умнее и выучил 7 новых слов. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/42-2.php'>42 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>