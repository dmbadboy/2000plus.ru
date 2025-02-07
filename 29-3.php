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
	
	
	if (@$_REQUEST['eng1']=="vocation school")
	
	{
		echo "<b> 785.Профессионально-техническое училище: vocational school</b>";
		$eng1="vocational school";
	}
	else
	{
		echo "785-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="university")
	
	{
		echo "<b> 786.Университет:university</b>";
	
		$eng2="university";
	}
	else
	{
		echo "786-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="algebra")
	
	{
			echo "<b> 787.Алгебра:algebra</b>";
	
		$eng3="algebra";
		
		
	}
	else
	{
		echo "787-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="astronomy")
	
	{
		echo "<b> 788.Астрономия: astronomy</b>";
		$eng4="astronomy";
		
		
	}
	else
	{
		echo "788-Неверно.";
	}
	if (@$_REQUEST['eng5']=="biology")
	
	{
		echo "<b> 789.Биология:biology</b>";
		$eng5="biology";
		
		
	}
	else
	{
		echo "789-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="chemistry")
	
	{
		echo "<b> 790.Химия: chemistry</b>";
		$eng6="chemistry";
		
		
	}
	else
	{
		echo "790.Неверно.";
	}
if (@$_REQUEST['eng7']=="foreign language")
	
	{
		echo "<b> 791.Иностранный язык: foreign language";
		$eng7="foreign language";
		
		
	}
	else
	{
		echo "791-Неверно.";
	}
	
	
}
?>
<br>
Образовательное учреждение,школьные предметы
</b>


































786.university
785.vocation school
788.astronomy
787.algebra
790.chemistry
789.biology
791.foreign language 


















































<form action="29-3.php" method="post">
<p>
Профессионально-техническое училище:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Университет:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Алгебра:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Астрономия:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Биология:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Химия:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Иностранный язык:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="vocation school" && @$_REQUEST['eng2']=="university" && @$_REQUEST['eng3']=="algebra" && @$_REQUEST['eng4']=="astronomy" && @$_REQUEST['eng5']=="biology" && @$_REQUEST['eng6']=="chemistry" && @$_REQUEST['eng7']=="foreign language"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/29-4.php'>29 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>