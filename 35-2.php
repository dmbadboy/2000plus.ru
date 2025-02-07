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
	
	
	if (@$_REQUEST['eng1']=="foreign exchange market")
	
	{
		echo "<b> 951.Валютная биржа: foreign exchange market</b>";
		$eng1="foreign exchange market";
	}
	else
	{
		echo "951-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="rate of exchange")
	
	{
		echo "<b> 952.Валютный курс: rate of exchange</b>";
	
		$eng2="rate of exchange";
	}
	else
	{
		echo "952-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="invest")
	
	{
			echo "<b> 953.Инвестировать, вкладывать деньги: invest</b>";
	
		$eng3="invest";
		
		
	}
	else
	{
		echo "953-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="invest money in smth")
	
	{
		echo "<b> 954.Вкладывать деньги во что-либо: invest money in smth</b>";
		$eng4="invest money in smth";
		
		
	}
	else
	{
		echo "954-Неверно.";
	}
	if (@$_REQUEST['eng5']=="lend")
	
	{
		echo "<b> 955.Давать в долг: lend</b>";
		$eng5="lend";
		
		
	}
	else
	{
		echo "955-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="money")
	
	{
		echo "<b> 956.Деньги:money</b>";
		$eng6="money";
		
		
	}
	else
	{
		echo "956.Неверно.";
	}
if (@$_REQUEST['eng7']=="bank-note")
	
	{
		echo "<b> 957.Банкнота, купюра:bank-note";
		$eng7="bank-note";
		
		
	}
	else
	{
		echo "957-Неверно.";
	}
	
	
}
?>
<br>
Банковские услуги, деньги
</b>






















































944.foreign exchange market
945.rate of exchange
946.invest
947.invest money in smth
948.lend
949.money
950.bank-note

















































<form action="35-2.php" method="post">
<p>
Валютная биржа:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Валютный курс:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Инвестировать, вкладывать деньги:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Вкладывать деньги в что-либо:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Давать в долг:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Деньги:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Банкнота:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="foreign exchange market" && @$_REQUEST['eng2']=="rate of exchange" && @$_REQUEST['eng3']=="invest" && @$_REQUEST['eng4']=="invest money in smth" && @$_REQUEST['eng5']=="lend" && @$_REQUEST['eng6']=="money" && @$_REQUEST['eng7']=="bank-note"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/35-3.php'>35 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>