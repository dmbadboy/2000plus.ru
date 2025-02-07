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
	
	
	if (@$_REQUEST['eng1']=="credit")
	
	{
		echo "<b> 944.Кредит: credit</b>";
		$eng1="credit";
	}
	else
	{
		echo "944-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="on credit")
	
	{
		echo "<b> 945.В кредит: on credit</b>";
	
		$eng2="on credit";
	}
	else
	{
		echo "945-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="currency")
	
	{
			echo "<b> 946.Валюта: currency</b>";
	
		$eng3="currency";
		
		
	}
	else
	{
		echo "946-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="currency exchange")
	
	{
		echo "<b> 947.Брать в долг: currency exchange</b>";
		$eng4="currency exchange";
		
		
	}
	else
	{
		echo "947-Неверно.";
	}
	if (@$_REQUEST['eng5']=="free currency")
	
	{
		echo "<b> 948.Свободно конвертируемая валюта: free currency</b>";
		$eng5="free currency";
		
		
	}
	else
	{
		echo "948-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="debt")
	
	{
		echo "<b> 949.Долг:debt</b>";
		$eng6="debt";
		
		
	}
	else
	{
		echo "949.Неверно.";
	}
if (@$_REQUEST['eng7']=="exchange")
	
	{
		echo "<b> 950.Размен денег:exchange";
		$eng7="exchange";
		
		
	}
	else
	{
		echo "950-Неверно.";
	}
	
	
}
?>
<br>
Банковские услуги
</b>






















































944.on credit
945.debt
946.currency exchange
947.currency
948.free currency
949.credit
950.exchange

















































<form action="35-1.php" method="post">
<p>
Кредит:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
В кредит:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Валюта:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Обмен валюты:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Свободно конвертируемая валюта:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Долг:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Размен денег:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="credit" && @$_REQUEST['eng2']=="on credit" && @$_REQUEST['eng3']=="currency" && @$_REQUEST['eng4']=="currency exchange" && @$_REQUEST['eng5']=="free currency" && @$_REQUEST['eng6']=="debt" && @$_REQUEST['eng7']=="exchange"){
echo "<h2>Кто-то сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/35-2.php'>35 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>