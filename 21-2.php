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
if (@$_REQUEST['eng1']=="nail polish")
	
	{
		echo "<b> 561.Лак для ногтей: nail polish</b>";
	
		$eng1="nail polish";
	}
	else
	{
		echo "561-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="nail remover")
	
	{
		echo "<b> 562.Жидкость для снятия лака: nail remover</b>";
		$eng2="nail remover";
	}
	else
	{
		echo "562-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="perfume")
	
	{
		echo "<b> 556.Парфюмерия,духи :perfume</b>";
		$eng3="perfume";
	}
	else
	{
		echo "563-Неверно.";
	}
	if (@$_REQUEST['eng4']=="powder")
	
	{
		echo "<b> 564.Пудра: powder</b>";
		$eng4="powder";
	}
	else
	{
		echo "564-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="rouge")
	
	{
		echo "<b> 565.Грим, косметика: rougeb>";
		$eng5="rouge";
	}
	else
	{
		echo "565.Неверно.";
	}
if (@$_REQUEST['eng6']=="shampoo")
	
	{
		echo "<b> 566.Шампунь: shampoo</b>";
		$eng6="shampoo";
	}
	else
	{
		echo "566-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="soap")
	
	{
		echo "<b> 567.Мыло: soap</b>";
		$eng7="soap";
	}
	else
	{
		echo "567-неверно";
	}
	
}
?>
<br>
Косметика и гигиенические средства:
</b>






561.nail remover
562.nail polish
563.powder
564.perfume
565.shampoo
566.rouge
567.soap























































<form action="21-2.php" method="post">
<p>
Лак для ногтей:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Жидкость для снятия лака:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Духи,парфюмерия:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Пудра:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Румяна:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Шампунь:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Мыло:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="nail polish" && @$_REQUEST['eng2']=="nail remover" && @$_REQUEST['eng3']=="perfume" && @$_REQUEST['eng4']=="powder" && @$_REQUEST['eng5']=="rouge" && @$_REQUEST['eng6']=="shampoo" && @$_REQUEST['eng7']=="soap"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/21-3.php'>21 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>