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
	
	
	if (@$_REQUEST['eng1']=="general anaesthetic")
	
	{
		echo "<b> 659.Общий наркоз: general anaesthetic</b>";
		$eng1="general anaesthetic";
	}
	else
	{
		echo "659-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="local anaesthetic")
	
	{
		echo "<b> 660.Местный наркоз:local anaesthetic</b>";
	
		$eng2="local anaesthetic";
	}
	else
	{
		echo "660-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="analgetic")
	
	{
			echo "<b> 661.Болеутоляющие: analgetic</b>";
	
		$eng3="analgetic";
		
		
	}
	else
	{
		echo "661-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="bandage")
	
	{
		echo "<b> 662.Бинт, перевязочный материал: bandage</b>";
		$eng4="bandage";
		
		
	}
	else
	{
		echo "662-Неверно.";
	}
	if (@$_REQUEST['eng5']=="put on a bandage")
	
	{
		echo "<b> 663.Наложить повязку:put on a bandage</b>";
		$eng5="put on a bandage";
		
		
	}
	else
	{
		echo "663-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="bathing")
	
	{
		echo "<b> 664.Промывание( о ране): bathing</b>";
		$eng6="bathing";
		
		
	}
	else
	{
		echo "664.Неверно.";
	}
if (@$_REQUEST['eng7']=="compress")
	
	{
		echo "<b> 665.Компресс: compress";
		$eng7="compress";
		
		
	}
	else
	{
		echo "665-Неверно.";
	}
	
	
}
?>
<br>
Симптомы и болезни,лечение:
</b>

















659.local anaesthetic
660.bathing
661.bandage
662.put on a bandage
663.analgetic
664.general anaesthetic
665.compress


















































<form action="25-1.php" method="post">
<p>
Общий наркоз:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Местный наркоз:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Болеутоляющие:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бинт, перевязочный материал:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Наложить повязку:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Промывание (о ране):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Компресс:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="general anaesthetic" && @$_REQUEST['eng2']=="local anaesthetic" && @$_REQUEST['eng3']=="analgetic" && @$_REQUEST['eng4']=="bandage" && @$_REQUEST['eng5']=="put on a bandage" && @$_REQUEST['eng6']=="bathing" && @$_REQUEST['eng7']=="compress"){
echo "<h2>Чудесно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-2.php'>25 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>