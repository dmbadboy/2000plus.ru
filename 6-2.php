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
if (@$_REQUEST['eng1']=="husband")
	
	{
		echo "<b> 141.Муж: husband</b>";
	
		$eng1="husband";
	}
	else
	{
		echo "141-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="mother")
	
	{
		echo "<b> 142.Мать: mother</b>";
		$eng2="mother";
	}
	else
	{
		echo "142-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="mother-in-law")
	
	{
		echo "<b> 143.Тёща(мать жены),свекровь(мать мужа):mother-in-law</b>";
		$eng3="mother-in-law";
	}
	else
	{
		echo "143-Неверно.";
	}
	if (@$_REQUEST['eng4']=="nephew")
	
	{
		echo "<b> 144.Племянник: nephew</b>";
		$eng4="nephew";
	}
	else
	{
		echo "144-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="niece")
	
	{
		echo "<b> 145.Племянница :niece</b>";
		$eng5="niece";
	}
	else
	{
		echo "146-Неверно.";
	}
if (@$_REQUEST['eng6']=="parent")
	
	{
		echo "<b> 147.Родитель: parent</b>";
		$eng6="parent";
	}
	else
	{
		echo "147-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="relative")
	
	{
		echo "<b> 148.Родственник, родственница: relative</b>";
		$eng7="relative";
	}
	else
	{
		echo "148-неверно";
	}
	
}
?>
<br>
Родственные отношения:



141.mother
142.husband
143.nephew
144.mother-in-law
145.niece
146.relative
147.parent

























<form action="6-2.php" method="post">
<p>
Муж:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Мать:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Тёща(мать жены),свекровь(мать мужа):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Племянник:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Племянница:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Родитель:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Родственник, родственница:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="husband" && @$_REQUEST['eng2']=="mother" && @$_REQUEST['eng3']=="mother-in-law" && @$_REQUEST['eng4']=="nephew" && @$_REQUEST['eng5']=="niece" && @$_REQUEST['eng6']=="parent" && @$_REQUEST['eng7']=="relative"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/6-3.php'>6 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>