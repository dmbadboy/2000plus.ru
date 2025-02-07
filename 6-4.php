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
if (@$_REQUEST['eng1']=="twin")
	
	{
		echo "<b> 155.Блезнец: twin</b>";
	
		$eng1="twin";
	}
	else
	{
		echo "155-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="wife")
	
	{
		echo "<b> 156.Жена: wife</b>";
		$eng2="wife";
	}
	else
	{
		echo "156-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="bachelor")
	
	{
		echo "<b> 157.Холостяк:bachelor</b>";
		$eng3="bachelor";
	}
	else
	{
		echo "157-Неверно.";
	}
	if (@$_REQUEST['eng4']=="brige")
	
	{
		echo "<b> 158.Невестка: brige</b>";
		$eng4="brige";
	}
	else
	{
		echo "158-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="brigeroom")
	
	{
		echo "<b> 159.Жених :brigeroom</b>";
		$eng5="brigeroom";
	}
	else
	{
		echo "159-Неверно.";
	}
if (@$_REQUEST['eng6']=="divorce")
	
	{
		echo "<b> 160.Развод: divorce</b>";
		$eng6="divorce";
	}
	else
	{
		echo "160-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="engagement")
	
	{
		echo "<b> 161.Помолвка: engagement</b>";
		$eng7="engagement";
	}
	else
	{
		echo "161-неверно";
	}
	
}
?>
<br>
Родственные отношения,семейное положение:



155.wife
156.twin
157.brigeroom
158.bachelor
159.engagement
160.marriage
161.brige


























<form action="6-4.php" method="post">
<p>
Блезнец:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Жена:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Холостяк:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Невеста:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Жених:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Развод:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Помолвка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="twin" && @$_REQUEST['eng2']=="wife" && @$_REQUEST['eng3']=="bachelor" && @$_REQUEST['eng4']=="brige" && @$_REQUEST['eng5']=="brigeroom" && @$_REQUEST['eng6']=="divorce" && @$_REQUEST['eng7']=="engagement"){
echo "<h2>Круто. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/7-1.php'>7 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>