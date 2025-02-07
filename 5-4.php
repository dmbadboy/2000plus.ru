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
if (@$_REQUEST['eng1']=="adopted")
	
	{
		echo "<b> 127.Приёмный ребенок: adopted</b>";
	
		$eng1="adopted";
	}
	else
	{
		echo "127-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="daughter")
	
	{
		echo "<b> 128.Дочь: daughter</b>";
		$eng2="daughter";
	}
	else
	{
		echo "128-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="family")
	
	{
		echo "<b> 129.Семья:family</b>";
		$eng3="family";
	}
	else
	{
		echo "129-Неверно.";
	}
	if (@$_REQUEST['eng4']=="one parent")
	
	{
		echo "<b> 130.Неполная семья: one parent</b>";
		$eng4="one parent";
	}
	else
	{
		echo "130-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="father")
	
	{
		echo "<b> 131.Отец :father</b>";
		$eng5="father";
	}
	else
	{
		echo "131-Неверно.";
	}
if (@$_REQUEST['eng6']=="father-in-law")
	
	{
		echo "<b> 132.Свёкор(отец мужа),тесть(отец жены): father-in-law</b>";
		$eng6="father-in-law";
	}
	else
	{
		echo "132-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="granddaughter")
	
	{
		echo "<b> 133.Внучка: granddaughter</b>";
		$eng7="granddaughter";
	}
	else
	{
		echo "133-неверно";
	}
	
}
?>
<br>
Родственные отношения:



127.daughter
128.father-in-law
129.one parent
130.family
131.father
132.adopted
133.granddaughter
























<form action="5-4.php" method="post">
<p>
Приёмный ребенок:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Дочь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Семья:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Неполная семья:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Отец:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Свёкор(отец мужа),тесть(отец жены):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Внучка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="adopted" && @$_REQUEST['eng2']=="daughter" && @$_REQUEST['eng3']=="family" && @$_REQUEST['eng4']=="one parent" && @$_REQUEST['eng5']=="father" && @$_REQUEST['eng6']=="father-in-law" && @$_REQUEST['eng7']=="granddaughter"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/6-1.php'>6 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>