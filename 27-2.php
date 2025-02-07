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
	
	
	if (@$_REQUEST['eng1']=="get a credit for a course")
	
	{
		echo "<b> 722.Получать зачёт по предмету: get a credit for a course</b>";
		$eng1="get a credit for a course";
	}
	else
	{
		echo "722-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="dean")
	
	{
		echo "<b> 723.Декан:dean</b>";
	
		$eng2="dean";
	}
	else
	{
		echo "723-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="dean's office")
	
	{
			echo "<b> 724.Деканат: dean's office</b>";
	
		$eng3="dean's office";
		
		
	}
	else
	{
		echo "724-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="degree")
	
	{
		echo "<b> 725.Степень: degree</b>";
		$eng4="degree";
		
		
	}
	else
	{
		echo "725-Неверно.";
	}
	if (@$_REQUEST['eng5']=="bachelor's degree")
	
	{
		echo "<b> 726.Степень бакалавра:bachelor's degree</b>";
		$eng5="bachelor's degree";
		
		
	}
	else
	{
		echo "726-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="certificate of degree")
	
	{
		echo "<b> 727.Диплом (свидетельство, документ): certificate of degree</b>";
		$eng6="certificate of degree";
		
		
	}
	else
	{
		echo "727.Неверно.";
	}
if (@$_REQUEST['eng7']=="degree work/research/thesis")
	
	{
		echo "<b> 728.Зачёт: degree work/research/thesis";
		$eng7="degree work/research/thesis";
		
		
	}
	else
	{
		echo "728-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>

























722.dean
723.get a credit for a course
724.degree
725.dean's office
726.certificate of degree
727.bachelor's degree
728.degree work/research/thesis


















































<form action="27-2.php" method="post">
<p>
Получать зачёт по предмету:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Декан:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Деканат:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Степень:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Степень бакалавра:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Диплом (свидетельство, документ):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Дипломная работа:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="get a credit for a course" && @$_REQUEST['eng2']=="dean" && @$_REQUEST['eng3']=="dean's office" && @$_REQUEST['eng4']=="degree" && @$_REQUEST['eng5']=="bachelor's degree" && @$_REQUEST['eng6']=="certificate of degree" && @$_REQUEST['eng7']=="degree work/research/thesis"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/27-3.php'>27 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>