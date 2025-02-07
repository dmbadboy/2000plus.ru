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
if (@$_REQUEST['eng1']=="civil")
	
	{
		echo "<b> 162.Гражданский брак: civil</b>";
	
		$eng1="civil";
	}
	else
	{
		echo "162-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="marriage certificate")
	
	{
		echo "<b> 156.Свидетельство о браке: marriage certificate</b>";
		$eng2="marriage certificate";
	}
	else
	{
		echo "163-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="marriage of convenience")
	
	{
		echo "<b> 164.Холостяк:marriage of convenience</b>";
		$eng3="marriage of convenience";
	}
	else
	{
		echo "164-Неверно.";
	}
	if (@$_REQUEST['eng4']=="sham")
	
	{
		echo "<b> 165.Фиктивный брак: sham</b>";
		$eng4="sham";
	}
	else
	{
		echo "165-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="religious")
	
	{
		echo "<b> 166.Венчание :religious</b>";
		$eng5="religious";
	}
	else
	{
		echo "166-Неверно.";
	}
if (@$_REQUEST['eng6']=="marry")
	
	{
		echo "<b> 167.Выходить замуж,жениться: marry</b>";
		$eng6="marry";
	}
	else
	{
		echo "167-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="be married to smb")
	
	{
		echo "<b> 168.Состоять в браке с кем-либо: be married to smb</b>";
		$eng7="be married to smb";
	}
	else
	{
		echo "168-неверно";
	}
	
}
?>
<br>
Cемейное положение:




162.marriage certificate
163.civil
164.sham
165.marriage of convenience
166.religious
167.be married to smb
168.marry



























<form action="7-1.php" method="post">
<p>
Гражданский брак:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Свидетельство о браке:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Брак по расчету:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Фиктивный брак:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Венчание:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Выходить замуж,жениться:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Состоять в браке с кем-либо:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="civil" && @$_REQUEST['eng2']=="marriage certificate" && @$_REQUEST['eng3']=="marriage of convenience" && @$_REQUEST['eng4']=="sham" && @$_REQUEST['eng5']=="religious" && @$_REQUEST['eng6']=="marry" && @$_REQUEST['eng7']=="be married to smb"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/7-2.php'>7 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>