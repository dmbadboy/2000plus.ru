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
if (@$_REQUEST['eng1']=="name")
	
	{
		echo "<b> 183.Имя(вообще): name</b>";
	
		$eng1="name";
	}
	else
	{
		echo "183-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="fist name")
	
	{
		echo "<b> 184.Имя(в отличии от фамилии): fist name</b>";
		$eng2="fist name";
	}
	else
	{
		echo "184-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="last name")
	
	{
		echo "<b> 185.Фамилия:last name</b>";
		$eng3="last name";
	}
	else
	{
		echo "185-Неверно.";
	}
	if (@$_REQUEST['eng4']=="maiden name")
	
	{
		echo "<b> 186.Девичья фамилия: maiden name</b>";
		$eng4="maiden name";
	}
	else
	{
		echo "186-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="married name")
	
	{
		echo "<b> 187.Фамилия в замужестве:married name</b>";
		$eng5="married name";
	}
	else
	{
		echo "187-Неверно.";
	}
if (@$_REQUEST['eng6']=="nationality")
	
	{
		echo "<b> 188.Национальность: nationality</b>";
		$eng6="nationality";
	}
	else
	{
		echo "188-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="occupation")
	
	{
		echo "<b> 189.Род занятий: occupation</b>";
		$eng7="occupation";
	}
	else
	{
		echo "189-неверно";
	}
	
}
?>
<br>
Cемейное положение,анкетные данные:






183.nationality
184.fist name
185.maiden name
186.last name
187.married name
188.occupation
189.name



























<form action="7-4.php" method="post">
<p>
Имя(вообще):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Имя(в отличии от фамилии):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Фамилия:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Девичья фамилия:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Фамилия в замужестве:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Национальность:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Род занятий:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="name" && @$_REQUEST['eng2']=="fist name" && @$_REQUEST['eng3']=="last name" && @$_REQUEST['eng4']=="maiden name" && @$_REQUEST['eng5']=="married name" && @$_REQUEST['eng6']=="nationality" && @$_REQUEST['eng7']=="occupation"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/8-1.php'>8 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>