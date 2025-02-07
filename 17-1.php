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
if (@$_REQUEST['eng1']=="dry wine")
	
	{
		echo "<b> 442.Сухое вино: dry wine</b>";
	
		$eng1="dry wine";
	}
	else
	{
		echo "442-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="sweet wine")
	
	{
		echo "<b> 443.Сладкое вино: sweet wine</b>";
		$eng2="sweet wine";
	}
	else
	{
		echo "443-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="butter")
	
	{
		echo "<b> 444.Пиво:butter</b>";
		$eng3="butter";
	}
	else
	{
		echo "444-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cheese")
	
	{
		echo "<b> 445.Сыр: cheese</b>";
		$eng4="cheese";
	}
	else
	{
		echo "445-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="curds")
	
	{
		echo "<b> 446.Творог curds</b>";
		$eng5="curds";
	}
	else
	{
		echo "446-Неверно.";
	}
if (@$_REQUEST['eng6']=="ice-cream")
	
	{
		echo "<b> 447.Мороженное: ice-cream</b>";
		$eng6="ice-cream";
	}
	else
	{
		echo "447-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="kefir")
	
	{
		echo "<b> 448.Кефир: kefir</b>";
		$eng7="kefir";
	}
	else
	{
		echo "448-неверно";
	}
	
}
?>
<br>
Напитки:

442.kefir
443.sweet wine
444.dry wine
445.cheese
446.butter
447.ice-cream
448.curds



















































<form action="17-1.php" method="post">
<p>
Сухое вино:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Сладкое вино:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Масло:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сыр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Творог:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Мороженное:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кефир:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="dry wine" && @$_REQUEST['eng2']=="sweet wine" && @$_REQUEST['eng3']=="butter" && @$_REQUEST['eng4']=="cheese" && @$_REQUEST['eng5']=="curds" && @$_REQUEST['eng6']=="ice-cream" && @$_REQUEST['eng7']=="kefir"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/17-2.php'>17 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>