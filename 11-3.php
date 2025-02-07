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
if (@$_REQUEST['eng1']=="bathing cap")
	
	{
		echo "<b> 288.Шапочка для купания: bathing cap</b>";
	
		$eng1="bathing cap";
	}
	else
	{
		echo "288-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="genuine leather")
	
	{
		echo "<b> 289.Натуральная кожа: genuine leather</b>";
		$eng2="genuine leather";
	}
	else
	{
		echo "289-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="imitation leather")
	
	{
		echo "<b> 290.Искусственная кожа:imitation leather</b>";
		$eng3="imitation leather";
	}
	else
	{
		echo "290-Неверно.";
	}
	if (@$_REQUEST['eng4']=="satin")
	
	{
		echo "<b> 291.Атлас: satin</b>";
		$eng4="satin";
	}
	else
	{
		echo "291-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="silk")
	
	{
		echo "<b> 292.Шёлк:silk</b>";
		$eng5="silk";
	}
	else
	{
		echo "292-Неверно.";
	}
if (@$_REQUEST['eng6']=="suede")
	
	{
		echo "<b> 293.Замша: suede</b>";
		$eng6="suede";
	}
	else
	{
		echo "293-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="velvet")
	
	{
		echo "<b> 294.Бархат: velvet</b>";
		$eng7="velvet";
	}
	else
	{
		echo "294-неверно";
	}
	
}
?>
<br>
Ткани,обувь:

288.velvet
289.genuine leather
290.bathing cap
291.imitation leather
292.silk
293.satin
294.suede



































<form action="11-3.php" method="post">
<p>
Шапочка для купания:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Натуральная кожа:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Искусственная кожа:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Атлас:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Шелк:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Замша:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Бархат:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bathing cap" && @$_REQUEST['eng2']=="genuine leather" && @$_REQUEST['eng3']=="imitation leather" && @$_REQUEST['eng4']=="satin" && @$_REQUEST['eng5']=="silk" && @$_REQUEST['eng6']=="suede" && @$_REQUEST['eng7']=="velvet"){
echo "<h2>Это круто. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/11-4.php'>11 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>