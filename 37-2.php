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
	
	
	if (@$_REQUEST['eng1']=="library")
	
	{
		echo "<b> 1007.Библиотека: library</b>";
		$eng1="library";
	}
	else
	{
		echo "1007-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="museum")
	
	{
		echo "<b> 1008.Музей: museum/b>";
	
		$eng2="museum";
	}
	else
	{
		echo "1008-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="ethnographic museum")
	
	{
			echo "<b> 1009.Этнографический музей: ethnographic museum</b>";
	
		$eng3="ethnographic museum";
		
		
	}
	else
	{
		echo "1009-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="local history museum")
	
	{
		echo "<b> 10010.Краеведческий музей: local history museum</b>";
		$eng4="local history museum";
		
		
	}
	else
	{
		echo "10010-Неверно.";
	}
	if (@$_REQUEST['eng5']=="wax museum")
	
	{
		echo "<b> 1011.Музей восковых фигур: wax museumy/b>";
		$eng5="wax museum";
		
		
	}
	else
	{
		echo "1011-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="old people's home")
	
	{
		echo "<b> 1012.Обувная фабрика:old people's home/b>";
		$eng6="old people's home";
		
		
	}
	else
	{
		echo "1012.Неверно.";
	}
if (@$_REQUEST['eng7']=="public/pay telephone")
	
	{
		echo "<b> 1013.Таксафон:public/pay telephone";
		$eng7="public/pay telephone";
		
		
	}
	else
	{
		echo "1013-Неверно.";
	}
	
	
}
?>
<br>
Инфрастуктура города
</b>






















































1007.library
1008.ethnographic museum
1009.wax museum
1010.local history museum
1011.old people's home
1012.museum
1013.public/pay telephone

















































<form action="37-2.php" method="post">
<p>
Библиотека:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Музей:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Этнографический музей:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Краеведческий музей:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Музей восковых фигур:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Дом престарелых:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Таксафон:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="library" && @$_REQUEST['eng2']=="museum" && @$_REQUEST['eng3']=="ethnographic museum" && @$_REQUEST['eng4']=="local history museum" && @$_REQUEST['eng5']=="wax museum" && @$_REQUEST['eng6']=="old people's home" && @$_REQUEST['eng7']=="public/pay telephone"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/37-3.php'>37 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>