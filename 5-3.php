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
if (@$_REQUEST['eng1']=="aunt")
	
	{
		echo "<b> 120.Тетя: aunt</b>";
	
		$eng1="aunt";
	}
	else
	{
		echo "120-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="brother")
	
	{
		echo "<b> 121.Брат: brother</b>";
		$eng2="brother";
	}
	else
	{
		echo "121-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="brother-in-low")
	
	{
		echo "<b> 122.Зять(муж сестры),шурин(брат жены),свояк(муж своячицы),деверь(брат мужа):brother-in-low</b>";
		$eng3="brother-in-low";
	}
	else
	{
		echo "122-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cousin")
	
	{
		echo "<b> 123.Двоюродный брат,кузен,двоюродная сестра,кузина: cousin</b>";
		$eng4="cousin";
	}
	else
	{
		echo "123-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="second cousin")
	
	{
		echo "<b> 124.Троюродный брат,троюродная сестра :second cousin</b>";
		$eng5="second cousin";
	}
	else
	{
		echo "124-Неверно.";
	}
if (@$_REQUEST['eng6']=="child")
	
	{
		echo "<b> 125.Ребенок: child</b>";
		$eng6="child";
	}
	else
	{
		echo "125-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="children")
	
	{
		echo "<b> 126.Дети: children</b>";
		$eng7="children";
	}
	else
	{
		echo "126-неверно";
	}
	
}
?>
<br>
Родственные отношения:


120.children
121.brother
122.aunt
123.second cousin
124.brother-in-low
125.cousin
126.child
























<form action="5-3.php" method="post">
<p>
Тетя:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Брат:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Зять(муж сестры),шурин(брат жены),свояк(муж своячицы),деверь(брат мужа):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Двоюродный брат,кузен,двоюродная сестра,кузина:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Троюродный брат,троюродная сестра:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ребенок:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Дети:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="aunt" && @$_REQUEST['eng2']=="brother" && @$_REQUEST['eng3']=="brother-in-low" && @$_REQUEST['eng4']=="cousin" && @$_REQUEST['eng5']=="second cousin" && @$_REQUEST['eng6']=="child" && @$_REQUEST['eng7']=="children"){
echo "<h2>Замечательно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/5-4.php'>5 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>