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
	
	
	if (@$_REQUEST['eng1']=="gastritis")
	
	{
		echo "<b> 638.Гастрит: gastritis</b>";
		$eng1="gastritis";
	}
	else
	{
		echo "638-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="have a running nose")
	
	{
		echo "<b> 639.Иметь насморк:have a running nose</b>";
	
		$eng2="have a running nose";
	}
	else
	{
		echo "639-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="headache")
	
	{
			echo "<b> 640.Головная боль: headache</b>";
	
		$eng3="headache";
		
		
	}
	else
	{
		echo "640-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="indigestion")
	
	{
		echo "<b> 641.Расстройство желудка: indigestion</b>";
		$eng4="indigestion";
		
		
	}
	else
	{
		echo "641-Неверно.";
	}
	if (@$_REQUEST['eng5']=="inflammation")
	
	{
		echo "<b> 642.Воспаление:inflammation</b>";
		$eng5="inflammation";
		
		
	}
	else
	{
		echo "642-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="insomnia")
	
	{
		echo "<b> 643.Бессоница: insomnia</b>";
		$eng6="insomnia";
		
		
	}
	else
	{
		echo "643.Неверно.";
	}
if (@$_REQUEST['eng7']=="lose weight/appetite")
	
	{
		echo "<b> 644.Терять вес/аппетит: lose weight/appetite";
		$eng7="lose weight/appetite";
		
		
	}
	else
	{
		echo "644-Неверно.";
	}
	
	
}
?>
<br>
Симптомы и болезни:
</b>














638.gastritis
639.headache
640.have a running nose
641.inflammation
642.indigestion
643.lose weight/appetite
644.insomnia


















































<form action="24-2.php" method="post">
<p>
Гастрит:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Иметь насморк:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Головная боль:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Расстройство желудка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Воспаление:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Бессоница:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Терять вес/аппетит:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="gastritis" && @$_REQUEST['eng2']=="have a running nose" && @$_REQUEST['eng3']=="headache" && @$_REQUEST['eng4']=="indigestion" && @$_REQUEST['eng5']=="inflammation" && @$_REQUEST['eng6']=="insomnia" && @$_REQUEST['eng7']=="lose weight/appetite"){
echo "<h2>Ты молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/24-3.php'>24 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>