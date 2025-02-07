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
	
	
	if (@$_REQUEST['eng1']=="central bank")
	
	{
		echo "<b> 937.Центральный банк: central bank</b>";
		$eng1="central bank";
	}
	else
	{
		echo "937-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="commercial bank")
	
	{
		echo "<b> 938.Коммерческий банк: commercial bank</b>";
	
		$eng2="commercial bank";
	}
	else
	{
		echo "938-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="avings bank")
	
	{
			echo "<b> 939.Сберегательный банк: savings bank</b>";
	
		$eng3="savings bank";
		
		
	}
	else
	{
		echo "939-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="borrow")
	
	{
		echo "<b> 940.Брать в долг: borrow</b>";
		$eng4="borrow";
		
		
	}
	else
	{
		echo "940-Неверно.";
	}
	if (@$_REQUEST['eng5']=="cash")
	
	{
		echo "<b> 941.Наличные деньги: cash</b>";
		$eng5="cash";
		
		
	}
	else
	{
		echo "941-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="for cash payment")
	
	{
		echo "<b> 942.За наличный расчёт:for cash payment</b>";
		$eng6="for cash payment";
		
		
	}
	else
	{
		echo "942.Неверно.";
	}
if (@$_REQUEST['eng7']=="pay in cash")
	
	{
		echo "<b> 943.Платить наличными:pay in cash";
		$eng7="pay in cash";
		
		
	}
	else
	{
		echo "943-Неверно.";
	}
	
	
}
?>
<br>
Банковские услуги
</b>





















































937.central bank
938.for cash payment
939.savings bank
940.commercial bank
941.cash
942.borrow
943.pay in cash

















































<form action="34-4.php" method="post">
<p>
Центральный банк:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Коммерческий банк:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Сберегательный банк:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Брать в долг:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Наличные деньги:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
За наличный расчёт:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Платить наличными:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="central bank" && @$_REQUEST['eng2']=="commercial bank" && @$_REQUEST['eng3']=="savings bank" && @$_REQUEST['eng4']=="borrow" && @$_REQUEST['eng5']=="cash" && @$_REQUEST['eng6']=="for cash payment" && @$_REQUEST['eng7']=="pay in cash"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/35-1.php'>35 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>