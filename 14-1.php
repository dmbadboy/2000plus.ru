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
if (@$_REQUEST['eng1']=="curtain")
	
	{
		echo "<b> 358.Занавеска,штора: curtain</b>";
	
		$eng1="curtain";
	}
	else
	{
		echo "358-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="cushion")
	
	{
		echo "<b> 359.Диванная подушка: cushion</b>";
		$eng2="cushion";
	}
	else
	{
		echo "359-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="jalousie")
	
	{
		echo "<b> 360.Жалюзи:jalousie</b>";
		$eng3="jalousie";
	}
	else
	{
		echo "360-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sideboard")
	
	{
		echo "<b> 361.Сервант: sideboard</b>";
		$eng4="sideboard";
	}
	else
	{
		echo "361-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="sofa")
	
	{
		echo "<b> 362.Тахта,диван:sofa</b>";
		$eng5="sofa";
	}
	else
	{
		echo "362-Неверно.";
	}
if (@$_REQUEST['eng6']=="table")
	
	{
		echo "<b> 363.Стол: table</b>";
		$eng6="table";
	}
	else
	{
		echo "363-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="vase")
	
	{
		echo "<b> 364.Вазв: vase</b>";
		$eng7="vase";
	}
	else
	{
		echo "364-неверно";
	}
	
}
?>
<br>
Гостиная:

357.vase
352.cushion
351.curtain
354.sideboard
353.jalousie
356.table
355.sofa










































<form action="14-1.php" method="post">
<p>
Занавеска,штора:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Диванная подушка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Жалюзи:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сервант:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Диван,тахта:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Стол:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>

<p>
Ваза:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="curtain" && @$_REQUEST['eng2']=="cushion" && @$_REQUEST['eng3']=="jalousie" && @$_REQUEST['eng4']=="sideboard" && @$_REQUEST['eng5']=="sofa" && @$_REQUEST['eng6']=="table" && @$_REQUEST['eng7']=="vase"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/14-2.php'>14 день:2 урок</a>";
	}	
}
	

?>
</body>
</html>