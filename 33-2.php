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
	
	
	if (@$_REQUEST['eng1']=="letter of advice")
	
	{
		echo "<b> 889.Извещение, авизо: letter of advice</b>";
		$eng1="letter of advice";
	}
	else
	{
		echo "889-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="registered letter")
	
	{
		echo "<b> 890.Адресат, получательь: registered letter</b>";
	
		$eng2="registered letter";
	}
	else
	{
		echo "890-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="letter-box")
	
	{
			echo "<b> 891.Почтовый ящик:letter-box</b>";
	
		$eng3="letter-box";
		
		
	}
	else
	{
		echo "891-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="mail")
	
	{
		echo "<b> 892.Почта:mail</b>";
		$eng4="mail";
		
		
	}
	else
	{
		echo "892-Неверно.";
	}
	if (@$_REQUEST['eng5']=="air mail")
	
	{
		echo "<b> 893.Воздушная почта, авиопочта: air mail</b>";
		$eng5="air mail";
		
		
	}
	else
	{
		echo "893-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="e-mail")
	
	{
		echo "<b> 894.Электронная почта:e-mail</b>";
		$eng6="e-mail";
		
		
	}
	else
	{
		echo "894.Неверно.";
	}
if (@$_REQUEST['eng7']=="express mail")
	
	{
		echo "<b> 895.Экспресс-почта:express mail";
		$eng7="express mail";
		
		
	}
	else
	{
		echo "895-Неверно.";
	}
	
	
}
?>
<br>
Почта
</b>

















































889.registered letter
890.e-mail
891.mail
892.letter-box
893.air mail
894.letter of advice
895.express mail

















































<form action="33-2.php" method="post">
<p>
Извещение, авизо:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Заказное письмо:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Почтовый ящик:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Почта:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Воздушная почта, авиопочта:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Электронная почта:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Экспресс-почта:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="letter of advice" && @$_REQUEST['eng2']=="registered letter" && @$_REQUEST['eng3']=="letter-box" && @$_REQUEST['eng4']=="mail" && @$_REQUEST['eng5']=="air mail" && @$_REQUEST['eng6']=="e-mail" && @$_REQUEST['eng7']=="express mail"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/33-3.php'>33 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>