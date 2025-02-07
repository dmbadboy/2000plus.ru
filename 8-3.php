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
if (@$_REQUEST['eng1']=="architect")
	
	{
		echo "<b> 204.Архитектор: architect</b>";
	
		$eng1="architect";
	}
	else
	{
		echo "204-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="attorney")
	
	{
		echo "<b> 205.Адвакат,прокурор: attorney</b>";
		$eng2="attorney";
	}
	else
	{
		echo "205-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="banker")
	
	{
		echo "<b> 206.Банкир:banker</b>";
		$eng3="banker";
	}
	else
	{
		echo "206-Неверно.";
	}
	if (@$_REQUEST['eng4']=="bricklayer")
	
	{
		echo "<b> 207.Каменщик: bricklayer</b>";
		$eng4="bricklayer";
	}
	else
	{
		echo "207-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="builder")
	
	{
		echo "<b> 208.Строитель:builder</b>";
		$eng5="builder";
	}
	else
	{
		echo "208-Неверно.";
	}
if (@$_REQUEST['eng6']=="businessman")
	
	{
		echo "<b> 209.Бизнесмен: businessman</b>";
		$eng6="businessman";
	}
	else
	{
		echo "209-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="clerk")
	
	{
		echo "<b> 210.Клерк,конторский служащий: clerk</b>";
		$eng7="clerk";
	}
	else
	{
		echo "210-неверно";
	}
	
}
?>
<br>
Анкетные данные,профессии:






204.clerk
205.builder
206.attorney
207.architect
208.banker
209.bricklayer
210.businessman



























<form action="8-3.php" method="post">
<p>
Архитектор:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Адвакат,прокурор:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Банкир:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Каменщик:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Строитель:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Бизнесмен:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Клерк,конторский служащий:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="architect" && @$_REQUEST['eng2']=="attorney" && @$_REQUEST['eng3']=="banker" && @$_REQUEST['eng4']=="bricklayer" && @$_REQUEST['eng5']=="builder" && @$_REQUEST['eng6']=="businessman" && @$_REQUEST['eng7']=="clerk"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/8-4.php'>8 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>