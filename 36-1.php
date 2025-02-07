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
	
	
	if (@$_REQUEST['eng1']=="rouble")
	
	{
		echo "<b> 972.Рубль: rouble</b>";
		$eng1="rouble";
	}
	else
	{
		echo "972-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="yen")
	
	{
		echo "<b> 973.Ена: yen</b>";
	
		$eng2="yen";
	}
	else
	{
		echo "973-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="avenue")
	
	{
			echo "<b> 974.Широкая улица, аллея: avenue</b>";
	
		$eng3="avenue";
		
		
	}
	else
	{
		echo "974-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="block")
	
	{
		echo "<b> 975.Квартал (города): block</b>";
		$eng4="block";
		
		
	}
	else
	{
		echo "975-Неверно.";
	}
	if (@$_REQUEST['eng5']=="bridge")
	
	{
		echo "<b> 976.Мост: bridge/b>";
		$eng5="bridge";
		
		
	}
	else
	{
		echo "976-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="building")
	
	{
		echo "<b> 977.Здание, сооружение:building</b>";
		$eng6="building";
		
		
	}
	else
	{
		echo "977.Неверно.";
	}
if (@$_REQUEST['eng7']=="bus stop")
	
	{
		echo "<b> 978.Автобусная остановка:bus stop";
		$eng7="bus stop";
		
		
	}
	else
	{
		echo "978-Неверно.";
	}
	
	
}
?>
<br>
Деньги, город
</b>






















































972.rouble
973.avenue
974.bridge
975.block
976.building
977.yen
978.bus stop

















































<form action="36-1.php" method="post">
<p>
Рубль:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ена:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Широкая улица, аллея:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Квартал (города):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Мост:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Здание, постройка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Автобусная остановка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="rouble" && @$_REQUEST['eng2']=="yen" && @$_REQUEST['eng3']=="avenue" && @$_REQUEST['eng4']=="block" && @$_REQUEST['eng5']=="bridge" && @$_REQUEST['eng6']=="building" && @$_REQUEST['eng7']=="bus stop"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/36-2.php'>36 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>