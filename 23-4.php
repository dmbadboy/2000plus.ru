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
	
	
	if (@$_REQUEST['eng1']=="symptom")
	
	{
		echo "<b> 624.Симптом: symptom</b>";
		$eng1="symptom";
	}
	else
	{
		echo "624-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="treatment")
	
	{
		echo "<b> 625.Леченеие:treatment</b>";
	
		$eng2="treatment";
	}
	else
	{
		echo "625-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="treat for")
	
	{
			echo "<b> 626.Лечить от:treat for</b>";
	
		$eng3="treat for";
		
		
	}
	else
	{
		echo "626-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="allergy to")
	
	{
		echo "<b> 627.Аллергия: allergy to</b>";
		$eng4="allergy to";
		
		
	}
	else
	{
		echo "627-Неверно.";
	}
	if (@$_REQUEST['eng5']=="asthma")
	
	{
		echo "<b> 628.Астма:asthma</b>";
		$eng5="asthma";
		
		
	}
	else
	{
		echo "628-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="blood pressure")
	
	{
		echo "<b> 629.Кровянное давление: blood pressure</b>";
		$eng6="blood pressure";
		
		
	}
	else
	{
		echo "629.Неверно.";
	}
if (@$_REQUEST['eng7']=="bronhitis")
	
	{
		echo "<b> 630.Бронхит: bronhitis";
		$eng7="bronhitis";
		
		
	}
	else
	{
		echo "630-Неверно.";
	}
	
	
}
?>
<br>
Медицинское обслуживания:
</b>














624.symptom
625.theat for
626.treatment
627.asthma
628.allergy to
629.bronhitis
630.blood pressure






















































<form action="23-4.php" method="post">
<p>
Симптом:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Леченеие:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Лечит от:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Аллергия:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Астма:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Кровянное давление:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Бронхит:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="symptom" && @$_REQUEST['eng2']=="treatment" && @$_REQUEST['eng3']=="treat for" && @$_REQUEST['eng4']=="allergy to" && @$_REQUEST['eng5']=="asthma" && @$_REQUEST['eng6']=="blood pressure" && @$_REQUEST['eng7']=="bronhitis"){
echo "<h2>Всё ок. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/25-1.php'>26 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>