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
	
	
	if (@$_REQUEST['eng1']=="compulsory education")
	
	{
		echo "<b> 743.Обязательное образование: compulsory education</b>";
		$eng1="compulsory education";
	}
	else
	{
		echo "743-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="higher education")
	
	{
		echo "<b> 744.Высшее образование:higher education</b>";
	
		$eng2="higher education";
	}
	else
	{
		echo "744-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="in-service education")
	
	{
			echo "<b> 745.Повышение квалификации:in-service education</b>";
	
		$eng3="in-service education";
		
		
	}
	else
	{
		echo "745-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="secondary education")
	
	{
		echo "<b> 746.Среднее образование: secondary education</b>";
		$eng4="secondary education";
		
		
	}
	else
	{
		echo "746-Неверно.";
	}
	if (@$_REQUEST['eng5']=="vocational education")
	
	{
		echo "<b> 747.Профессионально-техническое образование:vocational education</b>";
		$eng5="vocational education";
		
		
	}
	else
	{
		echo "747-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="graduate")
	
	{
		echo "<b> 748.Выпускник университета: graduate</b>";
		$eng6="graduate";
		
		
	}
	else
	{
		echo "748.Неверно.";
	}
if (@$_REQUEST['eng7']=="graduate from the university")
	
	{
		echo "<b> 749.Окончить университет: graduate from the university";
		$eng7="graduate from the university";
		
		
	}
	else
	{
		echo "749-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>




























743.higher education
744.compulsory education
745.secondary education
746.in-service education
747.graduate
748.vocational education 
749.graduate from the university


















































<form action="28-1.php" method="post">
<p>
Обязательное образование:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Высшее образование:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Повышение квалификации:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Среднее образование:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Профессионально-техническое образование:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Выпускник университета:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Окончить университет:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="compulsory education" && @$_REQUEST['eng2']=="higher education" && @$_REQUEST['eng3']=="in-service education" && @$_REQUEST['eng4']=="secondary education" && @$_REQUEST['eng5']=="vocational education" && @$_REQUEST['eng6']=="graduate" && @$_REQUEST['eng7']=="graduate from the university"){
echo "<h2>Кто-то жаждет знаний. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/28-2.php'>28 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>