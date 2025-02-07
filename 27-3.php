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
	
	
	if (@$_REQUEST['eng1']=="doctor's degree")
	
	{
		echo "<b> 729.Степень доктора: doctor's degree</b>";
		$eng1="doctor's degree";
	}
	else
	{
		echo "729-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="master's degree")
	
	{
		echo "<b> 730.Декан:master s degree</b>";
	
		$eng2="master's degree";
	}
	else
	{
		echo "730-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="dissertation")
	
	{
			echo "<b> 731.Диссертация: dissertation</b>";
	
		$eng3="dissertation";
		
		
	}
	else
	{
		echo "731-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="Candidate's dissertation")
	
	{
		echo "<b> 732.Кандидацкая диссертация: Candidate's dissertation</b>";
		$eng4="Candidate's dissertation";
		
		
	}
	else
	{
		echo "732-Неверно.";
	}
	if (@$_REQUEST['eng5']=="doctoral dissertation")
	
	{
		echo "<b> 733.Докторская диссертация:doctoral dissertation</b>";
		$eng5="doctoral dissertation";
		
		
	}
	else
	{
		echo "733-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="defend a dissertation")
	
	{
		echo "<b> 734.Защищать диссертацию: defend a dissertation</b>";
		$eng6="defend a dissertation";
		
		
	}
	else
	{
		echo "734.Неверно.";
	}
if (@$_REQUEST['eng7']=="examination")
	
	{
		echo "<b> 735.Экзамен: examination";
		$eng7="examination";
		
		
	}
	else
	{
		echo "735-Неверно.";
	}
	
	
}
?>
<br>
Наука и образование
</b>


























729.master's degree
730.doctor's degree
731.Candidate's dissertation
732.dissertation
733.examination
734.doctoral dissertation
735.defend a dissertation


















































<form action="27-3.php" method="post">
<p>
Степень доктора:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Степень магистра:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Диссертация:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Кандидацкая диссертация:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Докторская диссертация:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Защищать диссертацию:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Экзамен:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="doctor's degree" && @$_REQUEST['eng2']=="master's degree" && @$_REQUEST['eng3']=="dissertation" && @$_REQUEST['eng4']=="Candidate's dissertation" && @$_REQUEST['eng5']=="doctoral dissertation" && @$_REQUEST['eng6']=="defend a dissertation" && @$_REQUEST['eng7']=="examination"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/27-4.php'>27 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>