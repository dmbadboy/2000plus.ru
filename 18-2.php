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
if (@$_REQUEST['eng1']=="jelly")
	
	{
		echo "<b> 477.Желе: jelly</b>";
	
		$eng1="jelly";
	}
	else
	{
		echo "477-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="kiss")
	
	{
		echo "<b> 478.Безе(пироженное): kiss</b>";
		$eng2="kiss";
	}
	else
	{
		echo "478-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="marsh-mallow")
	
	{
		echo "<b> 479.Зефир:marsh-mallow</b>";
		$eng3="marsh-mallow";
	}
	else
	{
		echo "479-Неверно.";
	}
	if (@$_REQUEST['eng4']=="paste")
	
	{
		echo "<b> 480.Пастила,халва: paste/b>";
		$eng4="paste";
	}
	else
	{
		echo "480-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="pie")
	
	{
		echo "<b> 481.Пирог: pie</b>";
		$eng5="pie";
	}
	else
	{
		echo "481.Неверно.";
	}
if (@$_REQUEST['eng6']=="ring")
	
	{
		echo "<b> 482.Сушка: ring</b>";
		$eng6="ring";
	}
	else
	{
		echo "482-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="roll")
	
	{
		echo "<b> 483.Булочка: roll</b>";
		$eng7="roll";
	}
	else
	{
		echo "483-неверно";
	}
	
}
?>
<br>
Выпечка и когндитерские изделия:
</b>
477.roll
478.kiss
479.jelly
480.paste
481.marsh-mallow
482.ring
483.pie





















































<form action="18-2.php" method="post">
<p>
Желе:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Безе(пироженное):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Зефир:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Пастила,халва:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пирог:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сушка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Булочка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="jelly" && @$_REQUEST['eng2']=="kiss" && @$_REQUEST['eng3']=="marsh-mallow" && @$_REQUEST['eng4']=="paste" && @$_REQUEST['eng5']=="pie" && @$_REQUEST['eng6']=="ring" && @$_REQUEST['eng7']=="roll"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/18-3.php'>18 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>