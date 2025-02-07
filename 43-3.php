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
	
	
	if (@$_REQUEST['eng1']=="pencil")
	
	{
		echo "<b> 1182.Карандаш: pencil</b>";
		$eng1="pencil";
	}
	else
	{
		echo "1182-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="plaster")
	
	{
		echo "<b> 1183.Гипс: plaster</b>";
	
		$eng2="plaster";
	}
	else
	{
		echo "1183-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="watercolours")
	
	{
			echo "<b> 1184.Акварель (краски): watercolours</b>";
	
		$eng3="watercolours";
		
		
	}
	else
	{
		echo "1184-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="billiards")
	
	{
		echo "<b> 1185.Бильярд:billiards</b>";
		$eng4="billiards";
		
		
	}
	else
	{
		echo "1185-Неверно.";
	}
	if (@$_REQUEST['eng5']=="cards")
	
	{
		echo "<b> 1186.Карта: cards</b>";
		$eng5="cards";
		
		
	}
	else
	{
		echo "1186-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="casino")
	
	{
		echo "<b> 1187.Казино, игорный клуб: casino</b>";
		$eng6="casino";
		
		
	}
	else
	{
		echo "1187.Неверно.";
	}
if (@$_REQUEST['eng7']=="chess")
	
	{
		echo "<b> 1188.Шахматы: chess";
		$eng7="chess";
		
		
	}
	else
	{
		echo "1188-Неверно.";
	}
	
	
}
?>
<br>
Художественные принадлежности, игры
</b>























































1182.pencil
1183.watercolours
1184.casino
1185.billiards
1186.cards
1187.plaster
1188.chess















































<form action="43-3.php" method="post">
<p>
Карандаш:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Гипс:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Акварель (краски):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Биллиард:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Карта:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Казино, игорный дом:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Шахматы:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="pencil" && @$_REQUEST['eng2']=="plaster" && @$_REQUEST['eng3']=="watercolours" && @$_REQUEST['eng4']=="billiards" && @$_REQUEST['eng5']=="cards" && @$_REQUEST['eng6']=="casino" && @$_REQUEST['eng7']=="chess"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/43-4.php'>42 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>