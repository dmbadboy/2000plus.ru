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
	
	
	if (@$_REQUEST['eng1']=="fall ill with smth")
	
	{
		echo "<b> 617.Заболеть чем-либо: fall with smth</b>";
		$eng1="fall ill with smth";
	}
	else
	{
		echo "617-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="remedy")
	
	{
		echo "<b> 618.Лекарство:remedy</b>";
	
		$eng2="remedy";
	}
	else
	{
		echo "618-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="folk remedy")
	
	{
			echo "<b> 619.Народное средство:folk remedy</b>";
	
		$eng3="folk remedy";
		
		
	}
	else
	{
		echo "619-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="homeopathic remedy")
	
	{
		echo "<b> 620.Выписать лекарство: homeopathic remedy</b>";
		$eng4="homeopathic remedy";
		
		
	}
	else
	{
		echo "621-Неверно.";
	}
	if (@$_REQUEST['eng5']=="prescribe a remedy")
	
	{
		echo "<b> 621.Поправиться, выздороветь:prescribe a remedy</b>";
		$eng5="prescribe a remedy";
		
		
	}
	else
	{
		echo "622-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="recover")
	
	{
		echo "<b> 622.Поправиться, выздороветь: recover</b>";
		$eng6="recover";
		
		
	}
	else
	{
		echo "623.Неверно.";
	}
if (@$_REQUEST['eng7']=="sick-leave")
	
	{
		echo "<b> 623.Отпуск по болезни: sick-leave";
		$eng7="sick-leave";
		
		
	}
	else
	{
		echo "623-Неверно.";
	}
	
	
}
?>
<br>
Медицинское обслуживания:
</b>














617.remedy
618.fall ill with smth
619.homeopathic
620.folk
621.recover
622.prescribe a remedy
623.sick-leave























































<form action="23-3.php" method="post">
<p>
Заболеть чем-либо:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Лекарство:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Народное средство :<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Гемеотическое средство:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Выписать лекарство:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Поправиться,выздороветь:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Отпуск по болезни:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="fall ill with smth" && @$_REQUEST['eng2']=="remedy" && @$_REQUEST['eng3']=="folk remedy" && @$_REQUEST['eng4']=="homeopathic remedy" && @$_REQUEST['eng5']=="prescribe a remedy" && @$_REQUEST['eng6']=="recover" && @$_REQUEST['eng7']=="sick-leave"){
echo "<h2>Всё ок. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/23-3.php'>22 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>