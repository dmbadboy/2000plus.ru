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
	
	
	if (@$_REQUEST['eng1']=="academic")
	
	{
		echo "<b> 715.Академический, педагогический, учебный: academic</b>";
		$eng1="academic";
	}
	else
	{
		echo "715-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="academic books")
	
	{
		echo "<b> 716.Учебная литература:academic books</b>";
	
		$eng2="academic books";
	}
	else
	{
		echo "716-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="academic year")
	
	{
			echo "<b> 717.Учебный год: academic year</b>";
	
		$eng3="academic year";
		
		
	}
	else
	{
		echo "717-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="certificate")
	
	{
		echo "<b> 718.Аттестат: certificate</b>";
		$eng4="certificate";
		
		
	}
	else
	{
		echo "718-Неверно.";
	}
	if (@$_REQUEST['eng5']=="certificate school leaving")
	
	{
		echo "<b> 719.Аттестат о среднем образовании:certificate school leaving</b>";
		$eng5="certificate school leaving";
		
		
	}
	else
	{
		echo "719-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="chair")
	
	{
		echo "<b> 720.Кафедра (подразделение учебного заведения): chair</b>";
		$eng6="chair";
		
		
	}
	else
	{
		echo "720.Неверно.";
	}
if (@$_REQUEST['eng7']=="credit")
	
	{
		echo "<b> 721.Зачёт: credit";
		$eng7="credit";
		
		
	}
	else
	{
		echo "721-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>
























715.academic books
716.academic
717.certificate
718.academic year
719.chair
720.certificate school leaving
721.credit


















































<form action="27-1.php" method="post">
<p>
Академический, педагогический, учебный:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Учебная литература:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Учебный год :<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Аттестат:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
 Аттестат о среднем образовании:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кафедра (подразделение учебного заведения):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Зачёт:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="academic" && @$_REQUEST['eng2']=="academic books" && @$_REQUEST['eng3']=="academic year" && @$_REQUEST['eng4']=="certificate" && @$_REQUEST['eng5']=="certificate school leaving" && @$_REQUEST['eng6']=="chair" && @$_REQUEST['eng7']=="credit"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/27-2.php'>27 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>