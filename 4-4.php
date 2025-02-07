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
if (@$_REQUEST['eng1']=="rude")
	
	{
		echo "<b> 103.Грубый: rude</b>";
	
		$eng1="rude";
	}
	else
	{
		echo "103-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="silly/stupid")
	
	{
		echo "<b> 104.Глупый/тупой: silly/stupid</b>";
		$eng2="silly/stupid";
	}
	else
	{
		echo "104-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="adolescent")
	
	{
		echo "<b> 105.Молодой человек:adolescent</b>";
		$eng3="adolescent";
	}
	else
	{
		echo "105-Неверно.";
	}
	if (@$_REQUEST['eng4']=="adult")
	
	{
		echo "<b> 106.Взрослый, совершенолетний: adult</b>";
		$eng4="adult";
	}
	else
	{
		echo "106-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="age")
	
	{
		echo "<b> 107.Возраст :age</b>";
		$eng5="age";
	}
	else
	{
		echo "107-Неверно.";
	}
if (@$_REQUEST['eng6']=="awkward")
	
	{
		echo "<b> 104.Переходный возвраст: awkward</b>";
		$eng6="awkward";
	}
	else
	{
		echo "108-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="be of")
	
	{
		echo "<b> 105.Быть совершенолетним: be of</b>";
		$eng7="be of";
	}
	else
	{
		echo "109-неверно";
	}
	
}
?>
<br>
Отрицательные черты характера,возвраст человека:



103.age
100.silly/stupid
99.rude
101.adolescent
105.be of
102.adult
104.awkward





















<form action="4-4.php" method="post">
<p>
Грубый:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Глупый,тупой:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Молодой человек:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Взрослый,совешенолетний:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Возраст:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Переходный возвраст:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Быть совершенолетним:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="rude" && @$_REQUEST['eng2']=="silly/stupid" && @$_REQUEST['eng3']=="adolescent" && @$_REQUEST['eng4']=="adult" && @$_REQUEST['eng5']=="age" && @$_REQUEST['eng6']=="awkward" && @$_REQUEST['eng7']=="be of"){
echo "<h2>Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/5-1.php'>5 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>