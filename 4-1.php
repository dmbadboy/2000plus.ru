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
if (@$_REQUEST['eng1']=="modest")
	
	{
		echo "<b> 85.Скромный: modest</b>";
	
		$eng1="modest";
	}
	else
	{
		echo "85-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="noble")
	
	{
		echo "<b> 86.Благородный noble</b>";
		$eng2="noble";
	}
	else
	{
		echo "86-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="persistent")
	
	{
		echo "<b> 87.Преданный:persistent</b>";
		$eng3="persistent";
	}
	else
	{
		echo "87-Неверно.";
	}
	if (@$_REQUEST['eng4']=="polite")
	
	{
		echo "<b> 88.Вежливый: polite</b>";
		$eng4="polite";
	}
	else
	{
		echo "88-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="punctual")
	
	{
		echo "<b> 89.Пунктуальный punctual</b>";
		$eng5="punctual";
	}
	else
	{
		echo "89-Неверно.";
	}
if (@$_REQUEST['eng6']=="reasonable")
	
	{
		echo "<b> 90.Трудолюбивый: reasonable</b>";
		$eng6="reasonable";
	}
	else
	{
		echo "90-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="tactful")
	
	{
		echo "<b> 84.Тактичный: tactful</b>";
		$eng7="tactful";
	}
	else
	{
		echo "84-неверно";
	}
	
}
?>
<br>
Положительные черты характера:
85.punctual
86.noble
87.tactful
88.persistent
89.reasonable
90.polite
91.modest
















<form action="4-1.php" method="post">
<p>
Скромный:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Благородный:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Настойчивый:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Вежливый:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пунктуальный:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Рассудительный:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Тактичный:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="modest" && @$_REQUEST['eng2']=="noble" && @$_REQUEST['eng3']=="persistent" && @$_REQUEST['eng4']=="polite" && @$_REQUEST['eng5']=="punctual" && @$_REQUEST['eng6']=="reasonable" && @$_REQUEST['eng7']=="tactful"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/4-2.php'>4 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>