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
if (@$_REQUEST['eng1']=="the male sex")
	
	{
		echo "<b> 197.Паспорт: the male sex</b>";
	
		$eng1="the male sex";
	}
	else
	{
		echo "197-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="signature")
	
	{
		echo "<b> 198.Подпись: signature</b>";
		$eng2="signature";
	}
	else
	{
		echo "198-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="social origin")
	
	{
		echo "<b> 199.Ооциальное происхождение:social origin</b>";
		$eng3="social origin";
	}
	else
	{
		echo "199-Неверно.";
	}
	if (@$_REQUEST['eng4']=="surname")
	
	{
		echo "<b> 200.Фамилия: surname</b>";
		$eng4="surname";
	}
	else
	{
		echo "120-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="accountant")
	
	{
		echo "<b> 201.Бухгалтер:accountant</b>";
		$eng5="accountant";
	}
	else
	{
		echo "201-Неверно.";
	}
if (@$_REQUEST['eng6']=="actor")
	
	{
		echo "<b> 202.Актёр: actor</b>";
		$eng6="actor";
	}
	else
	{
		echo "202-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="actress")
	
	{
		echo "<b> 203.Актриса: actress</b>";
		$eng7="actress";
	}
	else
	{
		echo "203-неверно";
	}
	
}
?>
<br>
Анкетные данные,профессии:







197.signature
198.surname
199.social origin
200.actor
201.accountant
202.actress
203.the male sex


























<form action="8-2.php" method="post">
<p>
Мужской пол:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Подпись:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Социальное происхождение:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Фамилия:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Бухгалтер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Актер:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Актрисса:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="the male sex" && @$_REQUEST['eng2']=="signature" && @$_REQUEST['eng3']=="social origin" && @$_REQUEST['eng4']=="surname" && @$_REQUEST['eng5']=="accountant" && @$_REQUEST['eng6']=="actor" && @$_REQUEST['eng7']=="actress"){
echo "<h2>Огонь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/8-3.php'>8 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>