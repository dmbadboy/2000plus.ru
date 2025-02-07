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
	
	
	if (@$_REQUEST['eng1']=="academy")
	
	{
		echo "<b> 771.Академия: academy</b>";
		$eng1="academy";
	}
	else
	{
		echo "771-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="conservatoire")
	
	{
		echo "<b> 772.Консерватория:conservatoire</b>";
	
		$eng2="conservatoire";
	}
	else
	{
		echo "772-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="department/faculty")
	
	{
			echo "<b> 773.Факультет:department/faculty</b>";
	
		$eng3="department/faculty";
		
		
	}
	else
	{
		echo "773-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="gymnasium")
	
	{
		echo "<b> 774.Гимназия: gymnasium</b>";
		$eng4="gymnasium";
		
		
	}
	else
	{
		echo "774-Неверно.";
	}
	if (@$_REQUEST['eng5']=="institute")
	
	{
		echo "<b> 775.Институт:institutet</b>";
		$eng5="institute";
		
		
	}
	else
	{
		echo "775-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="teachers' training institute")
	
	{
		echo "<b> 776.Педагогический институт: teachers' training institute</b>";
		$eng6="teachers' training institute";
		
		
	}
	else
	{
		echo "776.Неверно.";
	}
if (@$_REQUEST['eng7']=="lyceum")
	
	{
		echo "<b> 777.Лицей: lyceum";
		$eng7="lyceum";
		
		
	}
	else
	{
		echo "777-Неверно.";
	}
	
	
}
?>
<br>
Образовательное учреждение
</b>
































771.conservatoire
772.academy
773.gymnasium
774.department/faculty
775.teachers' training institute
776.institute
777.lyceum


















































<form action="29-1.php" method="post">
<p>
Академия:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Консерватория:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Факультет:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Гимназия:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Институт:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Педагогический институт:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Лицей:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="academy" && @$_REQUEST['eng2']=="conservatoire" && @$_REQUEST['eng3']=="department/faculty" && @$_REQUEST['eng4']=="gymnasium" && @$_REQUEST['eng5']=="institute" && @$_REQUEST['eng6']=="teachers' training institute" && @$_REQUEST['eng7']=="lyceum"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/29-2.php'>29 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>