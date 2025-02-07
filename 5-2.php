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
if (@$_REQUEST['eng1']=="men")
	
	{
		echo "<b> 113.Мужчины: men</b>";
	
		$eng1="men";
	}
	else
	{
		echo "113-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="newborn")
	
	{
		echo "<b> 114.Новорожденный: newborn</b>";
		$eng2="newborn";
	}
	else
	{
		echo "114-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="old")
	
	{
		echo "<b> 115.Старый:old</b>";
		$eng3="old";
	}
	else
	{
		echo "115-Неверно.";
	}
	if (@$_REQUEST['eng4']=="teenager")
	
	{
		echo "<b> 116.Подросток: teenager</b>";
		$eng4="teenager";
	}
	else
	{
		echo "116-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="woman")
	
	{
		echo "<b> 117.Женщина :woman</b>";
		$eng5="woman";
	}
	else
	{
		echo "117-Неверно.";
	}
if (@$_REQUEST['eng6']=="women")
	
	{
		echo "<b> 118.Женщины: women</b>";
		$eng6="women";
	}
	else
	{
		echo "118-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="youth")
	
	{
		echo "<b> 119.Юноша,подросток: youth</b>";
		$eng7="youth";
	}
	else
	{
		echo "119-неверно";
	}
	
}
?>
<br>
Возвраст человека:

113.youth
114.old
115.teenager
116.woman
117.men
118.newborn
119.women























<form action="5-2.php" method="post">
<p>
Мужчины:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Новорожденный:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Старый:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Подросток:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Женщина:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Женщины:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Юноша,подросток:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="men" && @$_REQUEST['eng2']=="newborn" && @$_REQUEST['eng3']=="old" && @$_REQUEST['eng4']=="teenager" && @$_REQUEST['eng5']=="woman" && @$_REQUEST['eng6']=="women" && @$_REQUEST['eng7']=="youth"){
echo "<h2>Выше всех похвал. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/5-3.php'>5 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>