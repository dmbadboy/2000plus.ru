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
if (@$_REQUEST['eng1']=="meat-ball")
	
	{
		echo "<b> 463.Фрикаделька: meat-ball</b>";
	
		$eng1="meat-ball";
	}
	else
	{
		echo "463-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="mutton")
	
	{
		echo "<b> 464.Баранина: mutton</b>";
		$eng2="mutton";
	}
	else
	{
		echo "464-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="pork")
	
	{
		echo "<b> 465.Свинина:pork</b>";
		$eng3="pork";
	}
	else
	{
		echo "465-Неверно.";
	}
	if (@$_REQUEST['eng4']=="roast beef")
	
	{
		echo "<b> 466.Ростбиф(подраренный кусок говядины,вырезанный из хребтовой части туши): roast beef</b>";
		$eng4="roast beef";
	}
	else
	{
		echo "466-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="sausage")
	
	{
		echo "<b> 467.Колбаса: sausage</b>";
		$eng5="sausage";
	}
	else
	{
		echo "467-Неверно.";
	}
if (@$_REQUEST['eng6']=="biscuit")
	
	{
		echo "<b> 468.Сухое печенье: biscuit</b>";
		$eng6="biscuit";
	}
	else
	{
		echo "468-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="bun")
	
	{
		echo "<b> 469.Сдобная булочка: bun</b>";
		$eng7="bun";
	}
	else
	{
		echo "469-неверно";
	}
	
}
?>
<br>
Мясные продукты:

463.bun
464.meat-ball
465.pork
466.mutton
467.sausage
468.roast beef
469.biscuit





















































<form action="17-4.php" method="post">
<p>
Фрикаделька(в супе):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Баранина:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Свинина:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Ростбиф(подраренный кусок говядины,вырезанный из хребтовой части туши):<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Колбаса:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сухое печенье:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Сдобная булочка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="meat-ball" && @$_REQUEST['eng2']=="mutton" && @$_REQUEST['eng3']=="pork" && @$_REQUEST['eng4']=="roast beef" && @$_REQUEST['eng5']=="sausage" && @$_REQUEST['eng6']=="biscuit" && @$_REQUEST['eng7']=="bun"){
echo "<h2>Кто-то явно жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/18-1.php'>18 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>