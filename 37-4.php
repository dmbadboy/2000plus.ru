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
	
	
	if (@$_REQUEST['eng1']=="swimming-pool")
	
	{
		echo "<b> 1021.Бассейн: swimming-pool</b>";
		$eng1="swimming-pool";
	}
	else
	{
		echo "1021-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="theatre")
	
	{
		echo "<b> 1022.Театр: theatre</b>";
	
		$eng2="theatre";
	}
	else
	{
		echo "1022-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="wedding palace")
	
	{
			echo "<b> 1023.Дворец бракосочетания: wedding palace</b>";
	
		$eng3="wedding palace";
		
		
	}
	else
	{
		echo "1023-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="workshop")
	
	{
		echo "<b> 1024.Мастерская: workshop</b>";
		$eng4="workshop";
		
		
	}
	else
	{
		echo "1024-Неверно.";
	}
	if (@$_REQUEST['eng5']=="zoo")
	
	{
		echo "<b> 1025.Зоопарк: zoo</b>";
		$eng5="zoo";
		
		
	}
	else
	{
		echo "1025-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="bicycle")
	
	{
		echo "<b> 1026.Велосипед:bicycle</b>";
		$eng6="bicycle";
		
		
	}
	else
	{
		echo "1026.Неверно.";
	}
if (@$_REQUEST['eng7']=="station")
	
	{
		echo "<b> 1027.Стадион:station";
		$eng7="station";
		
		
	}
	else
	{
		echo "1027-Неверно.";
	}
	
	
}
?>
<br>
Инфрастуктура города,транспорт
</b>























































1021.swimming-pool
1022.wedding palace
1023.zoo
1024.workshop
1025.bicycle
1026.theatre
1027.station

















































<form action="37-4.php" method="post">
<p>
Бассейн:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Театр:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Дворец бракосочетаний:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Мастерская:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Зоопарк:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Велосипед:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
вокзал:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="swimming-pool" && @$_REQUEST['eng2']=="theatre" && @$_REQUEST['eng3']=="wedding palace" && @$_REQUEST['eng4']=="workshop" && @$_REQUEST['eng5']=="zoo" && @$_REQUEST['eng6']=="bicycle" && @$_REQUEST['eng7']=="station"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/38-1.php'>38 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>