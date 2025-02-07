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
if (@$_REQUEST['eng1']=="beefsteak")
	
	{
		echo "<b> 456.Маргарин: beefsteak</b>";
	
		$eng1="beefsteak";
	}
	else
	{
		echo "456-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="chop")
	
	{
		echo "<b> 457.Отбивная котлета: chop</b>";
		$eng2="chop";
	}
	else
	{
		echo "457-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="cutlet")
	
	{
		echo "<b> 458.Котлета:cutlet</b>";
		$eng3="cutlet";
	}
	else
	{
		echo "458-Неверно.";
	}
	if (@$_REQUEST['eng4']=="fat")
	
	{
		echo "<b> 459.Жирный(о мясе): fat</b>";
		$eng4="fat";
	}
	else
	{
		echo "459-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="ham")
	
	{
		echo "<b> 460.Ветчина, окорок: ham</b>";
		$eng5="ham";
	}
	else
	{
		echo "460-Неверно.";
	}
if (@$_REQUEST['eng6']=="lamb")
	
	{
		echo "<b> 461.Мясо молодого барашка: lamb</b>";
		$eng6="lamb";
	}
	else
	{
		echo "461-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="lean")
	
	{
		echo "<b> 462.Постный(о мясе): lean</b>";
		$eng7="lean";
	}
	else
	{
		echo "462-неверно";
	}
	
}
?>
<br>
Мясные продукты:

456.lean
457.chop
458.beefsteak
459.fat
460.cutlet
461.lamb
462.ham




















































<form action="17-3.php" method="post">
<p>
Бифштекс:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Отбивная котлета:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Котлета:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Жирный(о мясе):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ветчина,окорок:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Мясо молодого барашка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Постный(о мясе):<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="beefsteak" && @$_REQUEST['eng2']=="chop" && @$_REQUEST['eng3']=="cutlet" && @$_REQUEST['eng4']=="fat" && @$_REQUEST['eng5']=="ham" && @$_REQUEST['eng6']=="lamb" && @$_REQUEST['eng7']=="lean"){
echo "<h2>Отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/17-4.php'>17 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>