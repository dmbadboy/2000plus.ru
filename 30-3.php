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
	
	
	if (@$_REQUEST['eng1']=="sheet of paper")
	
	{
		echo "<b> 813.Лист бумаги: sheet of paper</b>";
		$eng1="sheet of paper";
	}
	else
	{
		echo "813-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="paper-clip")
	
	{
		echo "<b> 814.Скрепка:paper-clip</b>";
	
		$eng2="paper-clip";
	}
	else
	{
		echo "814-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="pen")
	
	{
			echo "<b> 815.Ручка:pen</b>";
	
		$eng3="pen";
		
		
	}
	else
	{
		echo "815-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="pencil")
	
	{
		echo "<b> 816.Карандаш: pencil</b>";
		$eng4="pencil";
		
		
	}
	else
	{
		echo "816-Неверно.";
	}
	if (@$_REQUEST['eng5']=="printer")
	
	{
		echo "<b> 817.Принтер:printer</b>";
		$eng5="printer";
		
		
	}
	else
	{
		echo "817-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="ruler")
	
	{
		echo "<b> 818.Линейка:ruler</b>";
		$eng6="ruler";
		
		
	}
	else
	{
		echo "818.Неверно.";
	}
if (@$_REQUEST['eng7']=="scanner")
	
	{
		echo "<b> 819.Сканер: scanner";
		$eng7="scanner";
		
		
	}
	else
	{
		echo "819-Неверно.";
	}
	
	
}
?>
<br>
Офис
</b>






































813.paper-clip
814.pen
815.sheet of paper
816.printer
817.pencil
818.ruler
819.scanner


















































<form action="30-3.php" method="post">
<p>
Лист бумаги:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Скрепка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Ручка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Карандаш:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Принтер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Линейка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Сканер:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="sheet of paper" && @$_REQUEST['eng2']=="paper-clip" && @$_REQUEST['eng3']=="pen" && @$_REQUEST['eng4']=="pencil" && @$_REQUEST['eng5']=="printer" && @$_REQUEST['eng6']=="ruler" && @$_REQUEST['eng7']=="scanner"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/30-4.php'>30 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>