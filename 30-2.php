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
	
	
	if (@$_REQUEST['eng1']=="diary")
	
	{
		echo "<b> 806.Ежедневник, дневник: diary</b>";
		$eng1="diary";
	}
	else
	{
		echo "806-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dictaphone")
	
	{
		echo "<b> 807.Диктофон:dictaphone</b>";
	
		$eng2="dictaphone";
	}
	else
	{
		echo "807-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="eraser")
	
	{
			echo "<b> 808.Ластик, резинка:eraser</b>";
	
		$eng3="eraser";
		
		
	}
	else
	{
		echo "808-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="fan")
	
	{
		echo "<b> 809.Вентилятор: fan</b>";
		$eng4="fan";
		
		
	}
	else
	{
		echo "809-Неверно.";
	}
	if (@$_REQUEST['eng5']=="file")
	
	{
		echo "<b> 810.Скоросшиватель:file</b>";
		$eng5="file";
		
		
	}
	else
	{
		echo "810-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="(hole)punch")
	
	{
		echo "<b> 811.Дырокол: (hole)punch</b>";
		$eng6="(hole)punch";
		
		
	}
	else
	{
		echo "811.Неверно.";
	}
if (@$_REQUEST['eng7']=="paper")
	
	{
		echo "<b> 812.Бумага: paper";
		$eng7="paper";
		
		
	}
	else
	{
		echo "812-Неверно.";
	}
	
	
}
?>
<br>
Офис
</b>





































807.dictaphone
806.diary
809.fan
808.eraser
811.(hole)punch
810.file
812.paper


















































<form action="30-2.php" method="post">
<p>
Ежедневник, дневник:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Диктофон:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Ластик, резинка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Вентилятор:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Скоросшиватель:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Дырокол:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Бумага:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="diary" && @$_REQUEST['eng2']=="dictaphone" && @$_REQUEST['eng3']=="eraser" && @$_REQUEST['eng4']=="fan" && @$_REQUEST['eng5']=="file" && @$_REQUEST['eng6']=="(hole)punch" && @$_REQUEST['eng7']=="paper"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/30-3.php'>30 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>