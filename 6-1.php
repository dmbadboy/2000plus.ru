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
if (@$_REQUEST['eng1']=="great granddaughter")
	
	{
		echo "<b> 134.Правнучка: great granddaughter</b>";
	
		$eng1="great granddaughter";
	}
	else
	{
		echo "134-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="grandfather")
	
	{
		echo "<b> 135.Дедушка: grandfather</b>";
		$eng2="grandfather";
	}
	else
	{
		echo "135-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="great grandfather")
	
	{
		echo "<b> 136.Прадед:great grandfather</b>";
		$eng3="great grandfather";
	}
	else
	{
		echo "136-Неверно.";
	}
	if (@$_REQUEST['eng4']=="grandmother")
	
	{
		echo "<b> 137.Бабушка: grandmother</b>";
		$eng4="grandmother";
	}
	else
	{
		echo "137-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="great grandmother")
	
	{
		echo "<b> 138.Прабабушка :great grandmother</b>";
		$eng5="great grandmother";
	}
	else
	{
		echo "138-Неверно.";
	}
if (@$_REQUEST['eng6']=="grandson")
	
	{
		echo "<b> 139.Внук: grandson</b>";
		$eng6="grandson";
	}
	else
	{
		echo "139-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="great grandson")
	
	{
		echo "<b> 140.Правнук: great grandson</b>";
		$eng7="great grandson";
	}
	else
	{
		echo "140-неверно";
	}
	
}
?>
<br>
Родственные отношения:


134.great grandmother
135.grandfather
136.great granddaughter
137.grandmother
138.grandson
139.great grandfather
140.great grandson

























<form action="6-1.php" method="post">
<p>
Правнучка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Дедушка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Прадед:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бабушка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Прабабушка:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Внук:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Правнук:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="great granddaughter" && @$_REQUEST['eng2']=="grandfather" && @$_REQUEST['eng3']=="great grandfather" && @$_REQUEST['eng4']=="grandmother" && @$_REQUEST['eng5']=="great grandmother" && @$_REQUEST['eng6']=="grandson" && @$_REQUEST['eng7']=="great grandson"){
echo "<h2>Отличный темп. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/6-2.php'>6 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>