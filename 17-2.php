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
if (@$_REQUEST['eng1']=="margarine")
	
	{
		echo "<b> 449.Маргарин: margarine</b>";
	
		$eng1="margarine";
	}
	else
	{
		echo "449-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="milk")
	
	{
		echo "<b> 450.Молоко: milk</b>";
		$eng2="milk";
	}
	else
	{
		echo "450-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="soup cream")
	
	{
		echo "<b> 451.Сметана:soup cream</b>";
		$eng3="soup cream";
	}
	else
	{
		echo "451-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sweet cream")
	
	{
		echo "<b> 452.Сливки: sweet cream</b>";
		$eng4="sweet cream";
	}
	else
	{
		echo "452-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="yoghurt")
	
	{
		echo "<b> 453.Йогурт yoghurt</b>";
		$eng5="yoghurt";
	}
	else
	{
		echo "453-Неверно.";
	}
if (@$_REQUEST['eng6']=="bacon")
	
	{
		echo "<b> 454.Бекон: bacon</b>";
		$eng6="bacon";
	}
	else
	{
		echo "454-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="beef")
	
	{
		echo "<b> 455.Говядина: beef</b>";
		$eng7="beef";
	}
	else
	{
		echo "455-неверно";
	}
	
}
?>
<br>
Напитки,мясные продукты:

449.beef
450.milk
451.margarine
452.sweet cream
453.soup cream
454.bacon
455.yoghurt




















































<form action="17-2.php" method="post">
<p>
Маргарин:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Молоко:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Сметана:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сливки:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Йогурт:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Бекон:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Говядина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="margarine" && @$_REQUEST['eng2']=="milk" && @$_REQUEST['eng3']=="soup cream" && @$_REQUEST['eng4']=="sweet cream" && @$_REQUEST['eng5']=="yoghurt" && @$_REQUEST['eng6']=="bacon" && @$_REQUEST['eng7']=="beef"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/17-3.php'>17 день:3 урок</a>";
	}	
}
	

?>
</body>
</html>