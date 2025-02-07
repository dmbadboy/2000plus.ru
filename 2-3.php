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
if (@$_REQUEST['eng1']=="chin")
	
	{
		echo "<b>43.Подбородок: chin</b>";
	
		$eng1="chin";
	}
	else
	{
		echo "43-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="ear")
	
	{
		echo "<b>44.Ухо: ear</b>";
		$eng2="ear";
	}
	else
	{
		echo "44-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="eye")
	
	{
		echo "<b>45.Глаз:eye</b>";
		$eng3="eye";
	}
	else
	{
		echo "45-Неверно.";
	}
	if (@$_REQUEST['eng4']=="eyebrow")
	
	{
		echo "<b>46.Бровь: eyebrow </b>";
		$eng4="eyebrow";
	}
	else
	{
		echo "46-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="eyelash")
	
	{
		echo "<b>47.Ресница: eyelash</b>";
		$eng5="eyelash";
	}
	else
	{
		echo "47-Неверно.";
	}
if (@$_REQUEST['eng6']=="eyelid")
	
	{
		echo "<b>48.Веко: eyelid</b>";
		$eng6="eyelid";
	}
	else
	{
		echo "48-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="forehead")
	
	{
		echo "<b>42.Лоб: forehead</b>";
		$eng7="forehead";
	}
	else
	{
		echo "49-неверно";
	}
	
}
?>
<br>
Голова и лицо:

43.eye
44.ear
45.eyelid
46.eyebrow
47.chin
48.eyelash
49.forehead







<form action="2-3.php" method="post">
<p>
Подбородок:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ухо:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Глаз:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бровь:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ресница:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Веко:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Лоб:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="chin" && @$_REQUEST['eng2']=="ear" && @$_REQUEST['eng3']=="eye" && @$_REQUEST['eng4']=="eyebrow" && @$_REQUEST['eng5']=="eyelash" && @$_REQUEST['eng6']=="eyelid" && @$_REQUEST['eng7']=="forehead"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/2-4.php'>2 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>