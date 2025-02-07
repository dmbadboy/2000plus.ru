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
	
	
	if (@$_REQUEST['eng1']=="dentist")
	
	{
		echo "<b> 694.Стомотолог: dentist</b>";
		$eng1="dentist";
	}
	else
	{
		echo "694-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dermatologist")
	
	{
		echo "<b> 695.Дерматолог:dermatologist</b>";
	
		$eng2="dermatologist";
	}
	else
	{
		echo "695-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="gastroenterologist")
	
	{
			echo "<b> 696.Гастроэнтеролог: gastroenterologist</b>";
	
		$eng3="gastroenterologist";
		
		
	}
	else
	{
		echo "696-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="gynaecologist")
	
	{
		echo "<b> 697.Гинеколог: gynaecologist</b>";
		$eng4="gynaecologist";
		
		
	}
	else
	{
		echo "697-Неверно.";
	}
	if (@$_REQUEST['eng5']=="neurologist")
	
	{
		echo "<b> 698.Невролог:neurologist</b>";
		$eng5="neurologist";
		
		
	}
	else
	{
		echo "698-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="nurse")
	
	{
		echo "<b> 699.Медсестра: nurse</b>";
		$eng6="nurse";
		
		
	}
	else
	{
		echo "699.Неверно.";
	}
if (@$_REQUEST['eng7']=="obstetrician")
	
	{
		echo "<b> 700.Акушер: obstetrician";
		$eng7="obstetrician";
		
		
	}
	else
	{
		echo "700-Неверно.";
	}
	
	
}
?>
<br>
Лечение,медецинский персонал:
</b>





















694.dermatologist
695.neurologist
696.gynaecologist
697.gastroenterologist
698.nurse
699.dentist
700.obstetrician


















































<form action="26-2.php" method="post">
<p>
Стомотолог:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Дерматолог:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Гастроэнтеролог:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Гинеколог:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Невролог:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Медсестра:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Акушер:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="dentist" && @$_REQUEST['eng2']=="dermatologist" && @$_REQUEST['eng3']=="gastroenterologist" && @$_REQUEST['eng4']=="gynaecologist" && @$_REQUEST['eng5']=="neurologist" && @$_REQUEST['eng6']=="nurse" && @$_REQUEST['eng7']=="obstetrician"){
echo "<h2>Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-3.php'>26 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>