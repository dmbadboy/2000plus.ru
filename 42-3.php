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
	
	
	if (@$_REQUEST['eng1']=="paint")
	
	{
		echo "<b> 1154.Рисовать, писать (красками): paint</b>";
		$eng1="paint";
	}
	else
	{
		echo "1154-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="paint from nature")
	
	{
		echo "<b> 1155.Писать с натуры: paint from nature</b>";
	
		$eng2="paint from nature";
	}
	else
	{
		echo "1155-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="painter")
	
	{
			echo "<b> 1156.Живописец: painer</b>";
	
		$eng3="painter";
		
		
	}
	else
	{
		echo "1156-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="painting")
	
	{
		echo "<b> 1157.Живопись:painting</b>";
		$eng4="painting";
		
		
	}
	else
	{
		echo "1157-Неверно.";
	}
	if (@$_REQUEST['eng5']=="icon painting")
	
	{
		echo "<b> 1158.Иконопись: icon painting</b>";
		$eng5="icon painting";
		
		
	}
	else
	{
		echo "1158-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="painting in oils")
	
	{
		echo "<b> 1159.Писать масляными красками: painting in oils</b>";
		$eng6="painting in oils";
		
		
	}
	else
	{
		echo "1159.Неверно.";
	}
if (@$_REQUEST['eng7']=="painting in watercolours")
	
	{
		echo "<b> 1160.Писать акварельными красками: painting in watercolours";
		$eng7="painting in watercolours";
		
		
	}
	else
	{
		echo "1160-Неверно.";
	}
	
	
}
?>
<br>
Художественное искусство
</b>























































1154.paint
1155.painter
1156.icon painting
1157.painting
1158.painting in oils
1159.paint from nature
1160.painting in watercolours
















































<form action="42-3.php" method="post">
<p>
Рисовать, писать (красками):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Писать с натуры:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Живописец:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Живопись:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Иконопись:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Живопись маслянными красками:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Акварельная живопись:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="paint" && @$_REQUEST['eng2']=="paint from nature" && @$_REQUEST['eng3']=="painter" && @$_REQUEST['eng4']=="painting" && @$_REQUEST['eng5']=="icon painting" && @$_REQUEST['eng6']=="painting in oils" && @$_REQUEST['eng7']=="painting in watercolours"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/42-4.php'>42 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>