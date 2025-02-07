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
if (@$_REQUEST['eng1']=="dill")
	
	{
		echo "<b> 526.Редис: dill</b>";
	
		$eng1="dill";
	}
	else
	{
		echo "526-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="garden redish")
	
	{
		echo "<b> 527.Редис: garden redish</b>";
		$eng2="garden redish";
	}
	else
	{
		echo "527-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="garlic")
	
	{
		echo "<b> 528.Чеснок:garlic</b>";
		$eng3="garlic";
	}
	else
	{
		echo "528-Неверно.";
	}
	if (@$_REQUEST['eng4']=="haricot")
	
	{
		echo "<b> 529.Фасоль: haricot</b>";
		$eng4="haricot";
	}
	else
	{
		echo "529-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="lettuce")
	
	{
		echo "<b> 530.Салат: lettuce</b>";
		$eng5="lettuce";
	}
	else
	{
		echo "530.Неверно.";
	}
if (@$_REQUEST['eng6']=="maize")
	
	{
		echo "<b> 531.Кукуруза: maize</b>";
		$eng6="maize";
	}
	else
	{
		echo "531-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="onion")
	
	{
		echo "<b> 532.Огурец: onion</b>";
		$eng7="onion";
	}
	else
	{
		echo "532-неверно";
	}
	
}
?>
<br>
Фрукты,овощи и специи:
</b>

526.onion
527.garden redish
528.dill
529.haricot
530.garlic
531.maize
532.lettuce























































<form action="20-1.php" method="post">
<p>
Укроп:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Редис:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Чеснок:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Фасоль:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Салат:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кукуруза:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Лук:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="dill" && @$_REQUEST['eng2']=="garden redish" && @$_REQUEST['eng3']=="garlic" && @$_REQUEST['eng4']=="haricot" && @$_REQUEST['eng5']=="lettuce" && @$_REQUEST['eng6']=="maize" && @$_REQUEST['eng7']=="onion"){
echo "<h2>Жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/20-2.php'>20 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>