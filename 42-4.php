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
	
	
	if (@$_REQUEST['eng1']=="picture")
	
	{
		echo "<b> 1161.Картина: picture</b>";
		$eng1="picture";
	}
	else
	{
		echo "1161-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="original picture")
	
	{
		echo "<b> 1162.Подлинник картины: original picture</b>";
	
		$eng2="original picture";
	}
	else
	{
		echo "1162-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="portrait")
	
	{
			echo "<b> 1163.Портрет: portrait</b>";
	
		$eng3="portrait";
		
		
	}
	else
	{
		echo "1163-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="full-length portrait")
	
	{
		echo "<b> 1164.Портрет во весь рост:full-length portrait</b>";
		$eng4="full-length portrait";
		
		
	}
	else
	{
		echo "1164-Неверно.";
	}
	if (@$_REQUEST['eng5']=="half-length portrait")
	
	{
		echo "<b> 1165.Поясной портрет: half-length portrait</b>";
		$eng5="half-length portrait";
		
		
	}
	else
	{
		echo "1165-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="self-portrait")
	
	{
		echo "<b> 1166.Автопортрет: self-portrait</b>";
		$eng6="self-portrait";
		
		
	}
	else
	{
		echo "1166.Неверно.";
	}
if (@$_REQUEST['eng7']=="reproduction")
	
	{
		echo "<b> 1167.Репродукция: reproduction";
		$eng7="reproduction";
		
		
	}
	else
	{
		echo "1167-Неверно.";
	}
	
	
}
?>
<br>
Художественное искусство
</b>























































1161.picture
1162.portrait
1163.half-length portrait
1164.full-letgth portrait
1165.self-portrait
1166.original picture
1167.reproduction
















































<form action="42-4.php" method="post">
<p>
Картина:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Подлинник картины:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Портрет:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Портрет во весь рост:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Поясной портет:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Автопортрет:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Репродукция:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="picture" && @$_REQUEST['eng2']=="original picture" && @$_REQUEST['eng3']=="portrait" && @$_REQUEST['eng4']=="full-length portrait" && @$_REQUEST['eng5']=="half-length portrait" && @$_REQUEST['eng6']=="self-portrait" && @$_REQUEST['eng7']=="reproduction"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/43-1.php'>42 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>