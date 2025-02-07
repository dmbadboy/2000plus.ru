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
	
	
	if (@$_REQUEST['eng1']=="chemist's")
	
	{
		echo "<b> 1000.Аптека: chemist's</b>";
		$eng1="chemist's";
	}
	else
	{
		echo "1000-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="children's home")
	
	{
		echo "<b> 1001.Детский дом: children's home</b>";
	
		$eng2="children's home";
	}
	else
	{
		echo "1001-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="embassy")
	
	{
			echo "<b> 1002.Посольство: embassy</b>";
	
		$eng3="embassy";
		
		
	}
	else
	{
		echo "1002-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="factory")
	
	{
		echo "<b> 1003.Фабрика, завод: factory</b>";
		$eng4="factory";
		
		
	}
	else
	{
		echo "1003-Неверно.";
	}
	if (@$_REQUEST['eng5']=="clothing factory")
	
	{
		echo "<b> 1004.Швейная фабрика: clothing factory/b>";
		$eng5="clothing factory";
		
		
	}
	else
	{
		echo "1004-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="shoe factory")
	
	{
		echo "<b> 1005.Обувная фабрика:shoe factory/b>";
		$eng6="shoe factory";
		
		
	}
	else
	{
		echo "1005.Неверно.";
	}
if (@$_REQUEST['eng7']=="hospital")
	
	{
		echo "<b> 1006.Больница:hospital";
		$eng7="hospital";
		
		
	}
	else
	{
		echo "1006-Неверно.";
	}
	
	
}
?>
<br>
Инфрастуктура города
</b>






















































1000.chemist's
1001.embassy
1002.clothing factory
1003.factory
1004.shoe factory
1005.children's home
1006.hospital

















































<form action="37-1.php" method="post">
<p>
Аптека:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Детский дом:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Посольство:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Завод, фабрика:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Швейная фабрика:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Обувная фабрика:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Больница:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="chemist's" && @$_REQUEST['eng2']=="children's home" && @$_REQUEST['eng3']=="embassy" && @$_REQUEST['eng4']=="factory" && @$_REQUEST['eng5']=="clothing factory" && @$_REQUEST['eng6']=="shoe factory" && @$_REQUEST['eng7']=="hospital"){
echo "<h2>Отличная работа Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/37-2.php'>37 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>