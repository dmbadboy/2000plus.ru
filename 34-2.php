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
	
	
	if (@$_REQUEST['eng1']=="telephone")
	
	{
		echo "<b> 917.Телефон: telephone</b>";
		$eng1="telephone";
	}
	else
	{
		echo "917-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="answer a telephone")
	
	{
		echo "<b> 918.Ответить на телефонный звонок: answer a telephone</b>";
	
		$eng2="answer a telephone";
	}
	else
	{
		echo "918-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="cellular/mobile telephone")
	
	{
			echo "<b> 919.Аотовый/мобильный телефон: cellular/mobile phone</b>";
	
		$eng3="cellular/mobile telephone";
		
		
	}
	else
	{
		echo "919-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="public telephone")
	
	{
		echo "<b> 920.Переговорный пункт: public telephone</b>";
		$eng4="public telephone";
		
		
	}
	else
	{
		echo "920-Неверно.";
	}
	if (@$_REQUEST['eng5']=="speak on/over the telephone")
	
	{
		echo "<b> 921.Пейджер: long-distance line</b>";
		$eng5="speak on/over the telephone";
		
		
	}
	else
	{
		echo "921-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="telephone box")
	
	{
		echo "<b> 922.Телефонная будка:telephone box</b>";
		$eng6="telephone box";
		
		
	}
	else
	{
		echo "922.Неверно.";
	}
if (@$_REQUEST['eng7']=="telephone directory")
	
	{
		echo "<b> 923.Телефонный справочник:telephone directory";
		$eng7="telephone directory";
		
		
	}
	else
	{
		echo "923-Неверно.";
	}
	
	
}
?>
<br>
Телефон
</b>





















































923.answer a telephone
924.telephone
925.speak on/over the telephone
926.public telephone
927.cellular/mobile telephone
928.telephone box
929.telephone directory

















































<form action="34-2.php" method="post">
<p>
Телефон:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ответить на телефонный звонок:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Сотовый/мобильный телефон:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Переговорный пункт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Разговаривать по телефону:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Телефонная будка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Телефонный справочник:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="telephone" && @$_REQUEST['eng2']=="answer a telephone" && @$_REQUEST['eng3']=="cellular/mobile telephone" && @$_REQUEST['eng4']=="public telephone" && @$_REQUEST['eng5']=="speak on/over the telephone" && @$_REQUEST['eng6']=="telephone box" && @$_REQUEST['eng7']=="telephone directory"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/34-3.php'>34 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>