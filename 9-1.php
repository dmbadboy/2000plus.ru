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
if (@$_REQUEST['eng1']=="hairdresser")
	
	{
		echo "<b> 218.Парикмахер: hairdresser</b>";
	
		$eng1="hairdresser";
	}
	else
	{
		echo "218-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="interpreter")
	
	{
		echo "<b> 219.Переводчик: interpreter</b>";
		$eng2="interpreter";
	}
	else
	{
		echo "219-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="journalist")
	
	{
		echo "<b> 220.Журналист:journalist</b>";
		$eng3="journalist";
	}
	else
	{
		echo "220-Неверно.";
	}
	if (@$_REQUEST['eng4']=="lawyer")
	
	{
		echo "<b> 221.Юрист,адвакат: lawyer</b>";
		$eng4="lawyer";
	}
	else
	{
		echo "221-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="manager")
	
	{
		echo "<b> 222.Менеджер:manager</b>";
		$eng5="manager";
	}
	else
	{
		echo "222-Неверно.";
	}
if (@$_REQUEST['eng6']=="metalworker/locksmith")
	
	{
		echo "<b> 223.Слесарь: metalworker/locksmith</b>";
		$eng6="metalworker/locksmith";
	}
	else
	{
		echo "223-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="miner")
	
	{
		echo "<b> 224.Шахтёр: miner</b>";
		$eng7="miner";
	}
	else
	{
		echo "224-неверно";
	}
	
}
?>
<br>
Анкетные данные,профессии:




218.miner
219.interpreter
220.lawyer
221.journalist
222.metalworker/locksmith
223.manager
224.hairdresser





























<form action="9-1.php" method="post">
<p>
Парикмахер:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Переводчик(устный):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Журналист:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Юрист,адвакат:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Менеджер:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Слесарь:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Шахтёр:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="hairdresser" && @$_REQUEST['eng2']=="interpreter" && @$_REQUEST['eng3']=="journalist" && @$_REQUEST['eng4']=="lawyer" && @$_REQUEST['eng5']=="manager" && @$_REQUEST['eng6']=="metalworker/locksmith" && @$_REQUEST['eng7']=="miner"){
echo "<h2>Всё отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/9-2.php'>9 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>