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
if (@$_REQUEST['eng1']=="table spoon")
	
	{
		echo "<b> 344.Столовая ложка: table spoon</b>";
	
		$eng1="table spoon";
	}
	else
	{
		echo "344-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="tea spoon")
	
	{
		echo "<b> 345.Чайная ложка: tea spoon</b>";
		$eng2="tea spoon";
	}
	else
	{
		echo "345-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="stool")
	
	{
		echo "<b> 346.Табурет:stool</b>";
		$eng3="stool";
	}
	else
	{
		echo "346-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sugar-bowl")
	
	{
		echo "<b> 347.Сахарница: sugar-bowl</b>";
		$eng4="sugar-bowl";
	}
	else
	{
		echo "347-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="tablecloth")
	
	{
		echo "<b> 348.Скатерть:tablecloth</b>";
		$eng5="tablecloth";
	}
	else
	{
		echo "348-Неверно.";
	}
if (@$_REQUEST['eng6']=="teapot")
	
	{
		echo "<b> 349.Чайная(для заварки): teapot</b>";
		$eng6="teapot";
	}
	else
	{
		echo "349-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="thermos")
	
	{
		echo "<b> 350.Десертная ложка: thermos</b>";
		$eng7="thermos";
	}
	else
	{
		echo "350-неверно";
	}
	
}
?>
<br>
Кухня:

344.thermos
345.tea spoon
346.table spoon
347.sugar-bowl
348.stool
349.teapot
350.tablecloth










































<form action="13-3.php" method="post">
<p>
Столовая ложка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Чайная ложка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Табурет:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Сахарница:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Скатерть:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Чайник (для заварки):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Термос:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="table spoon" && @$_REQUEST['eng2']=="tea spoon" && @$_REQUEST['eng3']=="stool" && @$_REQUEST['eng4']=="sugar-bowl" && @$_REQUEST['eng5']=="tablecloth" && @$_REQUEST['eng6']=="teapot" && @$_REQUEST['eng7']=="thermos"){
echo "<h2>Кто-то сегодня жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/13-4.php'>13 день:4 урок</a>";
	}	
}
	

?>
</body>
</html>