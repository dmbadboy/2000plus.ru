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
if (@$_REQUEST['eng1']=="jacket")
	
	{
		echo "<b> 246.Куртка,жакет,пиджак: jacket</b>";
	
		$eng1="jacket";
	}
	else
	{
		echo "246-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="denim jacket")
	
	{
		echo "<b> 247.Джинсовая куртка: denim jacket</b>";
		$eng2="denim jacket";
	}
	else
	{
		echo "247-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="jeans")
	
	{
		echo "<b> 248.Джинсы:jeans</b>";
		$eng3="jeans";
	}
	else
	{
		echo "248-Неверно.";
	}
	if (@$_REQUEST['eng4']=="pullover")
	
	{
		echo "<b> 249.Пуловер: pullover</b>";
		$eng4="pullover";
	}
	else
	{
		echo "249-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="raincoat")
	
	{
		echo "<b> 250.Плащ,дождевик:raincoat</b>";
		$eng5="raincoat";
	}
	else
	{
		echo "250-Неверно.";
	}
if (@$_REQUEST['eng6']=="shirt")
	
	{
		echo "<b> 251.Рубашка,блуза: shirt</b>";
		$eng6="shirt";
	}
	else
	{
		echo "251-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="shorts")
	
	{
		echo "<b> 252.Шорты: shorts</b>";
		$eng7="shorts";
	}
	else
	{
		echo "252-неверно";
	}
	
}
?>
<br>
Одежда:

246.shorts
247.jacket denim
248.pullover
249.jeans
250.shirt
251.raincoat
252.jacket
































<form action="10-1.php" method="post">
<p>
Куртка,жакет,пиджак:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Джинсовая куртка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Джинсы:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Пуловер:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Плащ,дождевик:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Рубашка,блуза:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Шорты:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="jacket" && @$_REQUEST['eng2']=="denim jacket" && @$_REQUEST['eng3']=="jeans" && @$_REQUEST['eng4']=="pullover" && @$_REQUEST['eng5']=="raincoat" && @$_REQUEST['eng6']=="shirt" && @$_REQUEST['eng7']=="shorts"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/10-2.php'>10 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>