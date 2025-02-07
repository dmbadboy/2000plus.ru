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
if (@$_REQUEST['eng1']=="brassiere")
	
	{
		echo "<b> 260.Бюстгалтер: brassiere</b>";
	
		$eng1="brassiere";
	}
	else
	{
		echo "260-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="nightgown")
	
	{
		echo "<b> 261.Ночная рубашка: nightgown</b>";
		$eng2="nightgown";
	}
	else
	{
		echo "261-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="panties")
	
	{
		echo "<b> 262.Трусики (детские или женские):panties</b>";
		$eng3="panties";
	}
	else
	{
		echo "262-Неверно.";
	}
	if (@$_REQUEST['eng4']=="peignoir")
	
	{
		echo "<b> 263.Пеньюар: peignoir</b>";
		$eng4="peignoir";
	}
	else
	{
		echo "263-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="pyjamas")
	
	{
		echo "<b> 264.Пижама:pyjamas</b>";
		$eng5="pyjamas";
	}
	else
	{
		echo "264-Неверно.";
	}
if (@$_REQUEST['eng6']=="boot")
	
	{
		echo "<b> 265.Ботинок: boot</b>";
		$eng6="boot";
	}
	else
	{
		echo "265-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="heel")
	
	{
		echo "<b> 266.Жилет: heel</b>";
		$eng7="heel";
	}
	else
	{
		echo "266-неверно";
	}
	
}
?>
<br>
Нижнее бельё,обувь:

260.pyjamas
261.heel
262.peignoir
263.nightgown
264.brassiere
265.panties
266.boot































<form action="10-3.php" method="post">
<p>
Бюстгалтер:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ночная рубашка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Трусики (детские или женские):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Пеньюар:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Пижама:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ботинок, сопог:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Каблук:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="brassiere" && @$_REQUEST['eng2']=="nightgown" && @$_REQUEST['eng3']=="panties" && @$_REQUEST['eng4']=="peignoir" && @$_REQUEST['eng5']=="pyjamas" && @$_REQUEST['eng6']=="boot" && @$_REQUEST['eng7']=="heel"){
echo "<h2>Круто. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/10-4.php'>10 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>