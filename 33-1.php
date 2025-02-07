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
	
	
	if (@$_REQUEST['eng1']=="address")
	
	{
		echo "<b> 882.Адресс: address</b>";
		$eng1="address";
	}
	else
	{
		echo "882-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="addressee")
	
	{
		echo "<b> 883.Адресат, получательь: addressee</b>";
	
		$eng2="addressee";
	}
	else
	{
		echo "883-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="deliver")
	
	{
			echo "<b> 884.Доставлять, разносить:deliver</b>";
	
		$eng3="deliver";
		
		
	}
	else
	{
		echo "884-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="deliver a letter to the address of")
	
	{
		echo "<b> 885.Доставлять письмо по адресу:deliver a letter to the address of</b>";
		$eng4="deliver a letter to the address of";
		
		
	}
	else
	{
		echo "885-Неверно.";
	}
	if (@$_REQUEST['eng5']=="envelope")
	
	{
		echo "<b> 886.Конверт: envelope</b>";
		$eng5="envelope";
		
		
	}
	else
	{
		echo "886-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="fax")
	
	{
		echo "<b> 887.Факс:fax</b>";
		$eng6="fax";
		
		
	}
	else
	{
		echo "887.Неверно.";
	}
if (@$_REQUEST['eng7']=="letter")
	
	{
		echo "<b> 888.Письмо:letter";
		$eng7="letter";
		
		
	}
	else
	{
		echo "888-Неверно.";
	}
	
	
}
?>
<br>
Почта
</b>
















































882.adressee
883.adress
884.deliver
885.deliver a letter to the address of
886.envelope
887.fax
888.letter

















































<form action="33-1.php" method="post">
<p>
Адрес:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Адресат, получатель:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Достовлять, разносить:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Доставлять письмо по адресу:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Конверт:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Факс:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Письмо, послание:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="address" && @$_REQUEST['eng2']=="addressee" && @$_REQUEST['eng3']=="deliver" && @$_REQUEST['eng4']=="deliver a letter to the address of" && @$_REQUEST['eng5']=="envelope" && @$_REQUEST['eng6']=="fax" && @$_REQUEST['eng7']=="letter"){
echo "<h2>Кто сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/33-2.php'>33 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>