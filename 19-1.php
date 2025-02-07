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
if (@$_REQUEST['eng1']=="bilberry")
	
	{
		echo "<b> 498.Черника: bilberry</b>";
	
		$eng1="bilberry";
	}
	else
	{
		echo "498-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cherry")
	
	{
		echo "<b> 499.Вишня: cherry</b>";
		$eng2="cherry";
	}
	else
	{
		echo "499-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="kiwi")
	
	{
		echo "<b> 500.Киви:kiwi</b>";
		$eng3="kiwi";
	}
	else
	{
		echo "500-Неверно.";
	}
	if (@$_REQUEST['eng4']=="lemon")
	
	{
		echo "<b> 501.Лемон: lemon</b>";
		$eng4="lemon";
	}
	else
	{
		echo "501-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="mango")
	
	{
		echo "<b> 502.Манго: mango</b>";
		$eng5="mango";
	}
	else
	{
		echo "502.Неверно.";
	}
if (@$_REQUEST['eng6']=="melon")
	
	{
		echo "<b> 503.Дяня: melon</b>";
		$eng6="melon";
	}
	else
	{
		echo "503-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="orange")
	
	{
		echo "<b> 504.Апельсин: orange</b>";
		$eng7="orange";
	}
	else
	{
		echo "504-неверно";
	}
	
}
?>
<br>
Фрукты:
</b>

498.orange
499.cherry
500.bilberry
501.lemon
502.kiwi
503.melon
504.mango






















































<form action="19-1.php" method="post">
<p>
Черника:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Вишня:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Кифи:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Лимон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Манго:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Дыня:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Апельсин:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bilberry" && @$_REQUEST['eng2']=="cherry" && @$_REQUEST['eng3']=="kiwi" && @$_REQUEST['eng4']=="lemon" && @$_REQUEST['eng5']=="mango" && @$_REQUEST['eng6']=="melon" && @$_REQUEST['eng7']=="orange"){
echo "<h2>Ты сегодня жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/19-2.php'>19 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>