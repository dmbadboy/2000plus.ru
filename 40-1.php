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
	
	
	if (@$_REQUEST['eng1']=="documentary")
	
	{
		echo "<b> 1084.Документальный фильм: documentary</b>";
		$eng1="documentary";
	}
	else
	{
		echo "1084-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dub")
	
	{
		echo "<b> 1085.Дублировать: dub</b>";
	
		$eng2="dub";
	}
	else
	{
		echo "1085-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="film")
	
	{
			echo "<b> 1086.Фильм: film</b>";
	
		$eng3="film";
		
		
	}
	else
	{
		echo "1086-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="adult film")
	
	{
		echo "<b> 1087.Фильм для взрослых: adult film</b>";
		$eng4="adult film";
		
		
	}
	else
	{
		echo "1087-Неверно.";
	}
	if (@$_REQUEST['eng5']=="adventure film")
	
	{
		echo "<b> 1088.Приключенческий фильм: adventure film</b>";
		$eng5="adventure film";
		
		
	}
	else
	{
		echo "1088-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="film epic")
	
	{
		echo "<b> 1089.Эпический фильм:film epic</b>";
		$eng6="film epic";
		
		
	}
	else
	{
		echo "1089.Неверно.";
	}
if (@$_REQUEST['eng7']=="full-length film")
	
	{
		echo "<b> 1090.Полнометражный фильм:full-length film";
		$eng7="full-length film";
		
		
	}
	else
	{
		echo "1090-Неверно.";
	}
	
	
}
?>
<br>
Кино
</b>























































1084.documentary
1085.film
1086.adventure film
1087.adult film
1088.film epic
1089.dub
1090.full-length film

















































<form action="40-1.php" method="post">
<p>
Документальный фильм:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Дублировать:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Фильм:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Фильм для взрослых:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Приключенческий фильм:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Киноэпопея:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Полнометражный фильм:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="documentary" && @$_REQUEST['eng2']=="dub" && @$_REQUEST['eng3']=="film" && @$_REQUEST['eng4']=="adult film" && @$_REQUEST['eng5']=="adventure film" && @$_REQUEST['eng6']=="film epic" && @$_REQUEST['eng7']=="full-length film"){
echo "<h2>Кто-то сегодня стал умнее на 7 слов. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/40-2.php'>40 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>