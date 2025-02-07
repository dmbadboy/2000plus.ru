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
if (@$_REQUEST['eng1']=="passport")
	
	{
		echo "<b> 190.Паспорт: passport</b>";
	
		$eng1="passport";
	}
	else
	{
		echo "190-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="issue a passport")
	
	{
		echo "<b> 191.Имя(в отличии от фамилии): issue a passport</b>";
		$eng2="issue a passport";
	}
	else
	{
		echo "191-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="patronymic")
	
	{
		echo "<b> 192.Отчество:patronymic</b>";
		$eng3="patronymic";
	}
	else
	{
		echo "192-Неверно.";
	}
	if (@$_REQUEST['eng4']=="questionnaire")
	
	{
		echo "<b> 193.Анкета, опросный лист: questionnaire</b>";
		$eng4="questionnaire";
	}
	else
	{
		echo "193-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="residence")
	
	{
		echo "<b> 194.Местожительство:residence</b>";
		$eng5="residence";
	}
	else
	{
		echo "194-Неверно.";
	}
if (@$_REQUEST['eng6']=="sex")
	
	{
		echo "<b> 195.Пол: sex</b>";
		$eng6="sex";
	}
	else
	{
		echo "195-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="the female sex")
	
	{
		echo "<b> 196.Род занятий: the female sex</b>";
		$eng7="the female sex";
	}
	else
	{
		echo "196-неверно";
	}
	
}
?>
<br>
Cемейное положение,анкетные данные:






190.sex
191.patronymic
192.issue a passport
193.questionnaire
194.the female sex
195.residence
196.passport



























<form action="8-1.php" method="post">
<p>
Паспорт:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Выдавать паспорт:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Отчество:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Анкета, опросный лист:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Местожительство:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Пол:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Женский пол:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="passport" && @$_REQUEST['eng2']=="issue a passport" && @$_REQUEST['eng3']=="patronymic" && @$_REQUEST['eng4']=="questionnaire" && @$_REQUEST['eng5']=="residence" && @$_REQUEST['eng6']=="sex" && @$_REQUEST['eng7']=="the female sex"){
echo "<h2>Чудесно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/8-2.php'>8 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>