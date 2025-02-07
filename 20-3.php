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
if (@$_REQUEST['eng1']=="tomato")
	
	{
		echo "<b> 540.Помидор: tomato</b>";
	
		$eng1="tomato";
	}
	else
	{
		echo "540-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="turnip")
	
	{
		echo "<b> 541.Репа: turnip</b>";
		$eng2="turnip";
	}
	else
	{
		echo "541-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="almond")
	
	{
		echo "<b> 542.Миндаль:almond</b>";
		$eng3="almond";
	}
	else
	{
		echo "542-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cashew(nut)")
	
	{
		echo "<b> 543.Картофель: cashew(nut)</b>";
		$eng4="cashew(nut)";
	}
	else
	{
		echo "543-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="coconut")
	
	{
		echo "<b> 544.Кокос: coconut</b>";
		$eng5="coconut";
	}
	else
	{
		echo "544.Неверно.";
	}
if (@$_REQUEST['eng6']=="hazel")
	
	{
		echo "<b> 545.Фундук: hazel</b>";
		$eng6="hazel";
	}
	else
	{
		echo "545-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="peanut")
	
	{
		echo "<b> 546.Шпинат: peanut</b>";
		$eng7="peanut";
	}
	else
	{
		echo "546-неверно";
	}
	
}
?>
<br>
Овощи и специи,орехи:
</b>


541.turnip
540.tomato
543.cashew(nut)
542.almond
545.hazel
544.coconut
546.peanut























































<form action="20-3.php" method="post">
<p>
Помидор:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Репа:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Миндаль:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Кешью:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Кокос:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Фундук,лесной орех:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Арахис:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="tomato" && @$_REQUEST['eng2']=="turnip" && @$_REQUEST['eng3']=="almond" && @$_REQUEST['eng4']=="cashew(nut)" && @$_REQUEST['eng5']=="coconut" && @$_REQUEST['eng6']=="hazel" && @$_REQUEST['eng7']=="peanut"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/20-4.php'>20 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>