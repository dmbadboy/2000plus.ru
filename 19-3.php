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
if (@$_REQUEST['eng1']=="strawberry")
	
	{
		echo "<b> 512.Земляника: strawberry</b>";
	
		$eng1="strawberry";
	}
	else
	{
		echo "512-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="tangerine")
	
	{
		echo "<b> 513.Мандарин: tangerine</b>";
		$eng2="tangerine";
	}
	else
	{
		echo "513-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="watermelon")
	
	{
		echo "<b> 514.Арбуз:watermelon</b>";
		$eng3="watermelon";
	}
	else
	{
		echo "514-Неверно.";
	}
	if (@$_REQUEST['eng4']=="asparagus")
	
	{
		echo "<b> 515.Спаржа: asparagus</b>";
		$eng4="asparagus";
	}
	else
	{
		echo "515-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="aubergine")
	
	{
		echo "<b> 516.Хурма: aubergine</b>";
		$eng5="aubergine";
	}
	else
	{
		echo "516.Неверно.";
	}
if (@$_REQUEST['eng6']=="basil")
	
	{
		echo "<b> 517.Базилик: basil</b>";
		$eng6="basil";
	}
	else
	{
		echo "517-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="beet(root)")
	
	{
		echo "<b> 518.Айва: beetroot)</b>";
		$eng7="beet(root)";
	}
	else
	{
		echo "518-неверно";
	}
	
}
?>
<br>
Фрукты,овощи и специи:
</b>

512.beet(root)
513.tangerine
514.strawberry
515.asparagus
516.watermelon
517.basil
518.aubergine






















































<form action="19-3.php" method="post">
<p>
Земляника:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Мандарин:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Арбуз:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Спаржа:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Баклажан:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Базилик:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Свекла:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="strawberry" && @$_REQUEST['eng2']=="tangerine" && @$_REQUEST['eng3']=="watermelon" && @$_REQUEST['eng4']=="asparagus" && @$_REQUEST['eng5']=="aubergine" && @$_REQUEST['eng6']=="basil" && @$_REQUEST['eng7']=="beet(root)"){
echo "<h2>Кто-то жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/19-4.php'>19 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>