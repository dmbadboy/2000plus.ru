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
	
	
	if (@$_REQUEST['eng1']=="program(me)")
	
	{
		echo "<b> 841.Телевезионная или радио программа: program(me)</b>";
		$eng1="program(me)";
	}
	else
	{
		echo "841-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="TV program")
	
	{
		echo "<b> 842.Программа телепередач:TV program</b>";
	
		$eng2="TV program";
	}
	else
	{
		echo "842-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="reportage")
	
	{
			echo "<b> 843.Репортаж:reportage</b>";
	
		$eng3="reportage";
		
		
	}
	else
	{
		echo "843-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="serial")
	
	{
		echo "<b> 844.Телесериал: serial</b>";
		$eng4="serial";
		
		
	}
	else
	{
		echo "844-Неверно.";
	}
	if (@$_REQUEST['eng5']=="ooap opera")
	
	{
		echo "<b> 845.Короткое экстренное сообщение:soap opera</b>";
		$eng5="soap opera";
		
		
	}
	else
	{
		echo "845-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="television")
	
	{
		echo "<b> 846.Телевидение:television</b>";
		$eng6="television";
		
		
	}
	else
	{
		echo "846.Неверно.";
	}
if (@$_REQUEST['eng7']=="cable television")
	
	{
		echo "<b> 847.Кабельное телевидение: cable television";
		$eng7="cable television";
		
		
	}
	else
	{
		echo "847-Неверно.";
	}
	
	
}
?>
<br>
Средство массовой информации
</b>










































841.TV program
842.program(me)
843.serial
844.television
845.soap opera
846.reportage
847.cable television


















































<form action="31-3.php" method="post">
<p>
Телевезионная или радио-программа:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Программа телепередач:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Репортаж:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Телесериал:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Мыльная опера (сериал на телевидении):<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Телевиденье:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кабельное телевидение:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="program(me)" && @$_REQUEST['eng2']=="TV program" && @$_REQUEST['eng3']=="reportage" && @$_REQUEST['eng4']=="serial" && @$_REQUEST['eng5']=="soap opera" && @$_REQUEST['eng6']=="television" && @$_REQUEST['eng7']=="cable television"){
echo "<h2>Кто сегодня молодец? Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/31-4.php'>31 день: 4урок</a>";
	}	
}
	

?>
</body>
</html>