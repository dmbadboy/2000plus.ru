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
if (@$_REQUEST['eng1']=="tray")
	
	{
		echo "<b> 351.Поднос: tray</b>";
	
		$eng1="tray";
	}
	else
	{
		echo "351-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="oven")
	
	{
		echo "<b> 352.Духовка: oven</b>";
		$eng2="oven";
	}
	else
	{
		echo "352-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="armchair")
	
	{
		echo "<b> 353.Кресло:armchair</b>";
		$eng3="armchair";
	}
	else
	{
		echo "353-Неверно.";
	}
	if (@$_REQUEST['eng4']=="bookcase")
	
	{
		echo "<b> 354.Книжный шкаф: bookcase</b>";
		$eng4="bookcase";
	}
	else
	{
		echo "354-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="bookshelf")
	
	{
		echo "<b> 355.Книжная полка:bookshelf</b>";
		$eng5="bookshelf";
	}
	else
	{
		echo "355-Неверно.";
	}
if (@$_REQUEST['eng6']=="carpet")
	
	{
		echo "<b> 356.Ковёр: carpet</b>";
		$eng6="carpet";
	}
	else
	{
		echo "356-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="chair")
	
	{
		echo "<b> 357.Стул: chair</b>";
		$eng7="chair";
	}
	else
	{
		echo "357-неверно";
	}
	
}
?>
<br>
Кухня,гостиная:

351.chair
352.oven
353.tray
354.bookcase
355.armchair
356.carpet
357.bookshelf










































<form action="13-4.php" method="post">
<p>
Поднос:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Духовка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Кресло:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Книжный шкаф:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Книжная полка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ковёр:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Стул:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="tray" && @$_REQUEST['eng2']=="oven" && @$_REQUEST['eng3']=="armchair" && @$_REQUEST['eng4']=="bookcase" && @$_REQUEST['eng5']=="bookshelf" && @$_REQUEST['eng6']=="carpet" && @$_REQUEST['eng7']=="chair"){
echo "<h2>Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/14-1.php'>14 день:1 урок</a>";
	}	
}
	

?>
</body>
</html>