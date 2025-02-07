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
if (@$_REQUEST['eng1']=="bonnet")
	
	{
		echo "<b> 274.Дамская шляпа(без полей),капор: bonnet</b>";
	
		$eng1="bonnet";
	}
	else
	{
		echo "274-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cap")
	
	{
		echo "<b> 275.Кепка,шапка,фуражка: cap</b>";
		$eng2="cap";
	}
	else
	{
		echo "275-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="hat")
	
	{
		echo "<b> 276.Шляпа,шляпка:hat</b>";
		$eng3="hat";
	}
	else
	{
		echo "276-Неверно.";
	}
	if (@$_REQUEST['eng4']=="kerchief")
	
	{
		echo "<b> 277.Платок(головной или шейный): kerchief</b>";
		$eng4="kerchief";
	}
	else
	{
		echo "277-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="panama")
	
	{
		echo "<b> 278.Панама:panama</b>";
		$eng5="panama";
	}
	else
	{
		echo "278-Неверно.";
	}
if (@$_REQUEST['eng6']=="shawl")
	
	{
		echo "<b> 279.Платок,шаль: shawl</b>";
		$eng6="shawl";
	}
	else
	{
		echo "279-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="brocade")
	
	{
		echo "<b> 280.Парча: brocade</b>";
		$eng7="brocade";
	}
	else
	{
		echo "280-неверно";
	}
	
}
?>
<br>
Головные уборы,ткани:

274.brocade
275.cap
276.bonnet
277.shawl
278.kerchief
279.hat
280.panama
































<form action="11-1.php" method="post">
<p>
Дамская шляпа(без полей),капор:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Кепка,шапка,фуражка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Шляпа,шляпка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Платок(головной или шейный):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Панама:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Платок,шаль:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Парча:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bonnet" && @$_REQUEST['eng2']=="cap" && @$_REQUEST['eng3']=="hat" && @$_REQUEST['eng4']=="kerchief" && @$_REQUEST['eng5']=="panama" && @$_REQUEST['eng6']=="shawl" && @$_REQUEST['eng7']=="brocade"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/11-2.php'>11 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>