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
if (@$_REQUEST['eng1']=="waist" || @$_REQUEST['eng1']=="Waist")
	
	{
		echo "<b>29,Талия: waist</b>";
	
		$eng1="waist";
	}
	else
	{
		echo "29-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="wrist" || $_REQUEST['eng2']=="Wrist")
	
	{
		echo "<b>30.Запястья: wrist </b>";
		$eng2="wrist";
	}
	else
	{
		echo "30-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="blood" || @$_REQUEST['eng3']=="Blood")
	
	{
		echo "<b>31.Rровь:blood</b>";
		$eng3="blood";
	}
	else
	{
		echo "31-Неверно.";
	}
	if (@$_REQUEST['eng4']=="brain" || @$_REQUEST['eng4']=="Brain")
	
	{
		echo "<b>32.Мозг: brain </b>";
		$eng4="brain";
	}
	else
	{
		echo "32-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="gall-bladder" || @$_REQUEST['eng5']=="Gall-bladder")
	
	{
		echo "<b>26.Желчный пузырь: gall-bladder</b>";
		$eng5="gall-bladder";
	}
	else
	{
		echo "33-Неверно.";
	}
if (@$_REQUEST['eng6']=="heart" || @$_REQUEST['eng6']=="Heart")
	
	{
		echo "<b>34.Сердце: heart</b>";
		$eng6="heart";
	}
	else
	{
		echo "34-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="liver" || @$_REQUEST['eng7']=="Liver")
	
	{
		echo "<b>35.Печень: liver</b>";
		$eng7="liver";
	}
	else
	{
		echo "35-неверно";
	}
	
}
?>
<br>
Части тела,внутренние органы:


29.wrist
30.gall-bladder
31.waist
32.brain
33.liver
34.blood
35.heart



<form action="2-1.php" method="post">
<p>
Талия:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Запястье:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Кровь:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Мозг:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Желчный пузырь:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Сердце:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Печень:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="waist" || @$_REQUEST['eng1']=="Waist" && @$_REQUEST['eng2']=="wrist" || @$_REQUEST['eng2']=="Wrist" && @$_REQUEST['eng3']=="blood" || @$_REQUEST['eng3']=="Blood" && @$_REQUEST['eng4']=="brain" || @$_REQUEST['eng4']=="Brain" && @$_REQUEST['eng5']=="gall-bladder" || @$_REQUEST['eng5']=="Gall-bladder" && @$_REQUEST['eng6']=="heart" || @$_REQUEST['eng6']=="Heart" && @$_REQUEST['eng7']=="liver" || @$_REQUEST['eng7']=="Liver"){
echo "<h2>Ты сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/2-2.php'>2 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>