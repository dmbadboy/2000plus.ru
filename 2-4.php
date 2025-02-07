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
if (@$_REQUEST['eng1']=="hair")
	
	{
		echo "<b>50.Волосы: hair</b>";
	
		$eng1="hair";
	}
	else
	{
		echo "50-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="jaw")
	
	{
		echo "<b>51.Челюсть: jaw</b>";
		$eng2="jaw";
	}
	else
	{
		echo "51-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="lip")
	
	{
		echo "<b>52.Губа:lip/b>";
		$eng3="lip";
	}
	else
	{
		echo "52-Неверно.";
	}
	if (@$_REQUEST['eng4']=="mole")
	
	{
		echo "<b>53.Родинка: mole </b>";
		$eng4="mole";
	}
	else
	{
		echo "53-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="moustache")
	
	{
		echo "<b>54.Усы: moustache</b>";
		$eng5="moustache";
	}
	else
	{
		echo "54-Неверно.";
	}
if (@$_REQUEST['eng6']=="mouth")
	
	{
		echo "<b>55.Рот: mouth</b>";
		$eng6="mouth";
	}
	else
	{
		echo "55-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="nape")
	
	{
		echo "<b>56.Затылок: nape</b>";
		$eng7="nape";
	}
	else
	{
		echo "56-неверно";
	}
	
}
?>
<br>
Голова и лицо:

50.moustache
51.jaw
52.hair
53.lip
54.nape
55.mole
56.mouth








<form action="2-4.php" method="post">
<p>
Волосы:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Челюсть:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Губа:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Родинка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Усы:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Рот:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Затылок:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="hair" && @$_REQUEST['eng2']=="jaw" && @$_REQUEST['eng3']=="lip" && @$_REQUEST['eng4']=="mole" && @$_REQUEST['eng5']=="moustache" && @$_REQUEST['eng6']=="mouth" && @$_REQUEST['eng7']=="nape"){
echo "<h2>Чудесно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/3-1.php'>3 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>