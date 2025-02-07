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
if (@$_REQUEST['eng1']=="pepper pot")
	
	{
		echo "<b> 337.Перечница: pepper pot</b>";
	
		$eng1="pepper pot";
	}
	else
	{
		echo "337-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="plate")
	
	{
		echo "<b> 338.Тарелка: plate</b>";
		$eng2="plate";
	}
	else
	{
		echo "338-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="salt-cellar")
	
	{
		echo "<b> 339.Соломка:salt-cellar</b>";
		$eng3="salt-cellar";
	}
	else
	{
		echo "339-Неверно.";
	}
	if (@$_REQUEST['eng4']=="saucer")
	
	{
		echo "<b> 340.Блюдце: saucer</b>";
		$eng4="saucer";
	}
	else
	{
		echo "340-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="sink")
	
	{
		echo "<b> 341.Раковина,мойка:sink</b>";
		$eng5="sink";
	}
	else
	{
		echo "341-Неверно.";
	}
if (@$_REQUEST['eng6']=="spoon")
	
	{
		echo "<b> 342.Ложка: spoon</b>";
		$eng6="spoon";
	}
	else
	{
		echo "342-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="dessert spoon")
	
	{
		echo "<b> 343.Десертная ложка: dessert spoon</b>";
		$eng7="dessert spoon";
	}
	else
	{
		echo "343-неверно";
	}
	
}
?>
<br>
Кухня:

337.dessert spoon
338.plate
339.pepper pot
340.spoon
341.saucer
342.salt-cellar
343.sink








































<form action="13-2.php" method="post">
<p>
Перечница:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Тарелка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Соломка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Блюдце:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Раковина,мойка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ложка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Десертная ложка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="pepper pot" && @$_REQUEST['eng2']=="plate" && @$_REQUEST['eng3']=="salt-cellar" && @$_REQUEST['eng4']=="saucer" && @$_REQUEST['eng5']=="sink" && @$_REQUEST['eng6']=="spoon" && @$_REQUEST['eng7']=="dessert spoon"){
echo "<h2>Ты в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/13-3.php'>13 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>