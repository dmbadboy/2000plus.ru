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
if (@$_REQUEST['eng1']=="single")
	
	{
		echo "<b> 169.Одинокий(неженатый),одинокая (незамужняя): single</b>";
	
		$eng1="single";
	}
	else
	{
		echo "169-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="wedding")
	
	{
		echo "<b> 170.Свадьба: wedding</b>";
		$eng2="wedding";
	}
	else
	{
		echo "170-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="widow")
	
	{
		echo "<b> 171.Вдова:widow</b>";
		$eng3="widow";
	}
	else
	{
		echo "171-Неверно.";
	}
	if (@$_REQUEST['eng4']=="widower")
	
	{
		echo "<b> 172.Вдовец: widower</b>";
		$eng4="widower";
	}
	else
	{
		echo "172-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="birth")
	
	{
		echo "<b> 173.Рождение,происхождение :birth</b>";
		$eng5="birth";
	}
	else
	{
		echo "173-Неверно.";
	}
if (@$_REQUEST['eng6']=="birth-place")
	
	{
		echo "<b> 174.Родина,место рождения:: birth-place</b>";
		$eng6="birth-place";
	}
	else
	{
		echo "174-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="date of")
	
	{
		echo "<b> 175.Дата рождения: date of</b>";
		$eng7="date of";
	}
	else
	{
		echo "175-неверно";
	}
	
}
?>
<br>
Cемейное положение,анкетные данные:





169.wedding
170.widower
171.single
172.birth-place
173.birth
174.widow
175.date of



























<form action="7-2.php" method="post">
<p>
Одинокий(неженатый),одинокая (незамужняя):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Свадьба:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Вдова:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Вдовец:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Рождение,происхождение:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Родина,место рождения:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Дата рождения:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="single" && @$_REQUEST['eng2']=="wedding" && @$_REQUEST['eng3']=="widow" && @$_REQUEST['eng4']=="widower" && @$_REQUEST['eng5']=="birth" && @$_REQUEST['eng6']=="birth-place" && @$_REQUEST['eng7']=="date of"){
echo "<h2>Отличный темп. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/7-3.php'>7 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>