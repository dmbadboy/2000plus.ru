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
if (@$_REQUEST['eng1']=="musician")
	
	{
		echo "<b> 225.Музыкант: musician</b>";
	
		$eng1="musician";
	}
	else
	{
		echo "225-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="painter")
	
	{
		echo "<b> 226.Маляр,художник: painter</b>";
		$eng2="painter";
	}
	else
	{
		echo "226-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="pianist")
	
	{
		echo "<b> 227.Пианист:pianist</b>";
		$eng3="pianist";
	}
	else
	{
		echo "227-Неверно.";
	}
	if (@$_REQUEST['eng4']=="pilot")
	
	{
		echo "<b> 228.Лётчик: pilot</b>";
		$eng4="pilot";
	}
	else
	{
		echo "228-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="policeman")
	
	{
		echo "<b> 229.Полицейский:policeman</b>";
		$eng5="policeman";
	}
	else
	{
		echo "229-Неверно.";
	}
if (@$_REQUEST['eng6']=="sailor")
	
	{
		echo "<b> 230.Моряк: sailor</b>";
		$eng6="sailor";
	}
	else
	{
		echo "230-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="salesman")
	
	{
		echo "<b> 231.Продавец,торговец: salesman</b>";
		$eng7="salesman";
	}
	else
	{
		echo "231-неверно";
	}
	
}
?>
<br>
Профессии:



225.salesman
226.musician
227.policeman
228.pianist
229.sailor
230.pilot
231.painter





























<form action="9-2.php" method="post">
<p>
Музыкант:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Маляр,художник:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пианист:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Летчик:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Полицейский:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Моряк:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Продавец,торговец:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="musician" && @$_REQUEST['eng2']=="painter" && @$_REQUEST['eng3']=="pianist" && @$_REQUEST['eng4']=="pilot" && @$_REQUEST['eng5']=="policeman" && @$_REQUEST['eng6']=="sailor" && @$_REQUEST['eng7']=="salesman"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/9-3.php'>9 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>