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
if (@$_REQUEST['eng1']=="district doctor")
	
	{
		echo "<b> 610.Участковый врач:district doctor</b>";
	
		$eng1="district doctor";
	}
	else
	{
		echo "610-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="disease")
	
	{
			echo "<b> 611.Болезнь (определённая):disease</b>";
	
		$eng2="disease";
		
		
	}
	else
	{
		echo "611-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="conginital disease")
	
	{
		echo "<b> 612.Врождённое заболевание: conginital disease</b>";
		$eng3="conginital disease";
		
		
	}
	else
	{
		echo "612-Неверно.";
	}
	if (@$_REQUEST['eng4']=="infectious disease")
	
	{
		echo "<b> 613.Инфекционное заболевание:infectious disease</b>";
		$eng4="infectious disease";
		
		
	}
	else
	{
		echo "613-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="complaint")
	
	{
		echo "<b> 614.Жалоба: complaint</b>";
		$eng5="complaint";
		
		
	}
	else
	{
		echo "614.Неверно.";
	}
if (@$_REQUEST['eng6']=="complication")
	
	{
		echo "<b> 615.Осложнение: complication";
		$eng6="complication";
		
		
	}
	else
	{
		echo "615-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="diagnosis")
	
	{
		echo "<b> 616.Диагноз: diagnosis</b>";
		$eng7="diagnosis";
	}
	else
	{
		echo "616-неверно";
	}
	
}
?>
<br>
Медицинское обслуживания:
</b>












610.disease
611.infectious disease
612.conginital disease
613.complication
614.complaint
615.district doctor
616.diagnosis























































<form action="23-1.php" method="post">
<p>
Участковый врач:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Болезнь (определённая):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Вражденное заболевание :<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Инфекционное заболевание:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Жалоба:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Осложнение:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Диагноз:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="district doctor" && @$_REQUEST['eng2']=="disease" && @$_REQUEST['eng3']=="conginital disease" && @$_REQUEST['eng4']=="infectious disease" && @$_REQUEST['eng5']=="complaint" && @$_REQUEST['eng6']=="complication" && @$_REQUEST['eng7']=="diagnosis"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/23-2.php'>22 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>