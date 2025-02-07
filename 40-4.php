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
	
	
	if (@$_REQUEST['eng1']=="shooting")
	
	{
		echo "<b> 1105.Съёмка: shooting</b>";
		$eng1="shooting";
	}
	else
	{
		echo "1105-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="thriller")
	
	{
		echo "<b> 1106.Триллер: thriller</b>";
	
		$eng2="thriller";
	}
	else
	{
		echo "1106-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="accompany")
	
	{
			echo "<b> 1107.Аккомпанировать: accompany</b>";
	
		$eng3="accompany";
		
		
	}
	else
	{
		echo "1107-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="baritone")
	
	{
		echo "<b> 1108.Баритон:baritone </b>";
		$eng4="baritone";
		
		
	}
	else
	{
		echo "1108-Неверно.";
	}
	if (@$_REQUEST['eng5']=="bass")
	
	{
		echo "<b> 1109.Бас: bass</b>";
		$eng5="bass";
		
		
	}
	else
	{
		echo "1109-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="choir")
	
	{
		echo "<b> 1110.Капелла, хор:choir</b>";
		$eng6="choir";
		
		
	}
	else
	{
		echo "1110.Неверно.";
	}
if (@$_REQUEST['eng7']=="contralto")
	
	{
		echo "<b> 1111.Контральто: contralto";
		$eng7="contralto";
		
		
	}
	else
	{
		echo "1111-Неверно.";
	}
	
	
}
?>
<br>
Кино, музыка
</b>























































1105.shooting
1106.accompany
1107.bass
1108.baritone
1109.choir
1110.thriller
1111.contralto

















































<form action="40-4.php" method="post">
<p>
Съёмка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Триллер:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Аккомпанировать:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Баритон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Бас:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Капелла, хор:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Контральто:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="shooting" && @$_REQUEST['eng2']=="thriller" && @$_REQUEST['eng3']=="accompany" && @$_REQUEST['eng4']=="baritone" && @$_REQUEST['eng5']=="bass" && @$_REQUEST['eng6']=="choir" && @$_REQUEST['eng7']=="contralto"){
echo "<h2>Кто-то сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/41-1.php'>41 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>