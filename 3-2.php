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
if (@$_REQUEST['eng1']=="character")
	
	{
		echo "<b> 64.Характер,темперамент,нрав,личность,фигура: character</b>";
	
		$eng1="character";
	}
	else
	{
		echo "64-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="man of")
	
	{
		echo "<b> 65.Человек с сильным характером: man of</b>";
		$eng2="man of";
	}
	else
	{
		echo "65-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="man of no")
	
	{
		echo "<b> 66.Слабый,бесхарактерный человек:man of no</b>";
		$eng3="man of no";
	}
	else
	{
		echo "66-Неверно.";
	}
	if (@$_REQUEST['eng4']=="nature")
	
	{
		echo "<b> 60.Характер,нрав: nature</b>";
		$eng4="nature";
	}
	else
	{
		echo "67-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="placid")
	
	{
		echo "<b> 68.Спокойный,тихий нрав: placid</b>";
		$eng5="placid";
	}
	else
	{
		echo "68-Неверно.";
	}
if (@$_REQUEST['eng6']=="personality")
	
	{
		echo "<b> 69.Личность,индивидуальность:: personality</b>";
		$eng6="personality";
	}
	else
	{
		echo "69-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="temperament")
	
	{
		echo "<b> 70.Темперамент,характер,нрав:: temperament</b>";
		$eng7="temperament";
	}
	else
	{
		echo "70-неверно";
	}
	
}
?>
<br>
Человеческая природа:
64.nature
65.character
66.temperament
67.man of no
68.man of
69.placid
70.personality











<form action="3-2.php" method="post">
<p>
Характер,темперамент,нрав,личность,фигура:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Человек с сильным характером:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Слабый,бесхарактерный человек:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Характер,нрав:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Спокойный,тихий нрав:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Личность,индивидуальность:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Темперамент,характер,нрав:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="character" && @$_REQUEST['eng2']=="man of" && @$_REQUEST['eng3']=="man of no" && @$_REQUEST['eng4']=="nature" && @$_REQUEST['eng5']=="placid" && @$_REQUEST['eng6']=="personality" && @$_REQUEST['eng7']=="temperament"){
echo "<h2>Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/3-3.php'>3 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>