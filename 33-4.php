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
	
	
	if (@$_REQUEST['eng1']=="remittance")
	
	{
		echo "<b> 903.Денежный перевод: remittance</b>";
		$eng1="remittance";
	}
	else
	{
		echo "903-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="sender")
	
	{
		echo "<b> 904.Отправитель: sender</b>";
	
		$eng2="sender";
	}
	else
	{
		echo "904-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="stamp")
	
	{
			echo "<b> 905.Почтовая марка:stamp</b>";
	
		$eng3="stamp";
		
		
	}
	else
	{
		echo "905-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="telegram")
	
	{
		echo "<b> 906.Телеграмма:telegram</b>";
		$eng4="telegram";
		
		
	}
	else
	{
		echo "906-Неверно.";
	}
	if (@$_REQUEST['eng5']=="bleeper/beeper")
	
	{
		echo "<b> 907.Пейджер: bleeper/beeper</b>";
		$eng5="bleeper/beeper";
		
		
	}
	else
	{
		echo "907-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="dial")
	
	{
		echo "<b> 908.Набирать номер:dial</b>";
		$eng6="dial";
		
		
	}
	else
	{
		echo "908.Неверно.";
	}
if (@$_REQUEST['eng7']=="dialling code")
	
	{
		echo "<b> 909.Код города (телефонный):dialling code";
		$eng7="dialling code";
		
		
	}
	else
	{
		echo "909-Неверно.";
	}
	
	
}
?>
<br>
Почта,телефон
</b>



















































903.sender
904.dial
905.stamp
906.bleeper/beeper
907.telegram
908.remittance
909.dialling code

















































<form action="33-4.php" method="post">
<p>
Денежный перевод:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Отправитель:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Почтовая марка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Телеграмма:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пейджер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Набирать номер:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Код города (телефонный):<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="remittance" && @$_REQUEST['eng2']=="sender" && @$_REQUEST['eng3']=="stamp" && @$_REQUEST['eng4']=="telegram" && @$_REQUEST['eng5']=="bleeper/beeper" && @$_REQUEST['eng6']=="dial" && @$_REQUEST['eng7']=="dialling code"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/34-1.php'>34 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>