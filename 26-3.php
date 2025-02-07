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
	
	
	if (@$_REQUEST['eng1']=="oculist")
	
	{
		echo "<b> 701.Окулист: oculist</b>";
		$eng1="oculist";
	}
	else
	{
		echo "701-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="otolaryngologist")
	
	{
		echo "<b> 702.Отоларинтолог:otolaryngologist</b>";
	
		$eng2="otolaryngologist";
	}
	else
	{
		echo "702-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="pediatrician")
	
	{
			echo "<b> 703.Педиатр: pediatrician</b>";
	
		$eng3="pediatrician";
		
		
	}
	else
	{
		echo "703-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="psychiatrist")
	
	{
		echo "<b> 704.Психиатр: psychiatrist</b>";
		$eng4="psychiatrist";
		
		
	}
	else
	{
		echo "704-Неверно.";
	}
	if (@$_REQUEST['eng5']=="surgeon")
	
	{
		echo "<b> 705.Хирург:surgeon</b>";
		$eng5="surgeon";
		
		
	}
	else
	{
		echo "705-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="therapeutist/physician")
	
	{
		echo "<b> 706.Терапевт: therapeutist/physician</b>";
		$eng6="therapeutist/physician";
		
		
	}
	else
	{
		echo "706.Неверно.";
	}
if (@$_REQUEST['eng7']=="urologist")
	
	{
		echo "<b> 707.Уролог: urologist";
		$eng7="urologist";
		
		
	}
	else
	{
		echo "707-Неверно.";
	}
	
	
}
?>
<br>
Лечение,медецинский персонал:
</b>






















701.otolaryngologist
702.urologist
703.surgeon
704.psychiatrist
705.pediatrician
706.therapeutist/physician
707.oculist


















































<form action="26-3.php" method="post">
<p>
Окулист:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Отоларинтолог:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Педиатр:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Психиатр:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Хирург:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Терапевт:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Уролог:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="oculist" && @$_REQUEST['eng2']=="otolaryngologist" && @$_REQUEST['eng3']=="pediatrician" && @$_REQUEST['eng4']=="psychiatrist" && @$_REQUEST['eng5']=="surgeon" && @$_REQUEST['eng6']=="therapeutist/physician" && @$_REQUEST['eng7']=="urologist"){
echo "<h2>Кто-то жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/26-4.php'>26 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>