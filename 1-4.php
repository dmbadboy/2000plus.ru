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
if (@$_REQUEST['eng1']=="neck" || @$_REQUEST['eng1']=="Neck")
	
	{
		echo "<b>22,Шея: neck</b>";
	
		$eng1="neck";
	}
	else
	{
		echo "22-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="palm" || @$_REQUEST['eng2']=="Palm")
	
	{
		echo "<b>23.palm: ладонь </b>";
		$eng2="palm";
	}
	else
	{
		echo "23-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="shoulder" || @$_REQUEST['eng3']=="Shoulder")
	
	{
		echo "<b>24.Shoulder: плечо</b>";
		$eng3="shoulder";
	}
	else
	{
		echo "24-Неверно.";
	}
	if (@$_REQUEST['eng4']=="thigh" || @$_REQUEST['eng4']=="Thigh")
	
	{
		echo "<b>25.Бедро: hip </b>";
		$eng4="thigh";
	}
	else
	{
		echo "25-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="throat" || @$_REQUEST['eng5']=="Throat")
	
	{
		echo "<b>26.Горло: throat</b>";
		$eng5="throat";
	}
	else
	{
		echo "26-Неверно.";
	}
if (@$_REQUEST['eng6']=="thumb" || @$_REQUEST['eng6']=="Thumb")
	
	{
		echo "<b>27.Большой палец(руки): thumb</b>";
		$eng6="thumb";
	}
	else
	{
		echo "27-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="toe" || @$_REQUEST['eng7']=="Toe")
	
	{
		echo "<b>28.Палец(ноги): toe</b>";
		$eng7="toe";
	}
	else
	{
		echo "28-неверно";
	}
	
}
?>
<br>
Части тела:
22.throat
23.palm
24.toe
25.thigh
26.neck
27.shoulder
28.thumb


<form action="1-4.php" method="post">
<p>
Шея:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ладонь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Плечо:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Бедро:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Горло:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Большой палец(руки):<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Палец(ноги):<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="neck" || @$_REQUEST['eng1']=="Neck" && @$_REQUEST['eng2']=="palm" || @$_REQUEST['eng2']=="Palm" && @$_REQUEST['eng3']=="shoulder" || @$_REQUEST['eng3']=="Shoulder" && @$_REQUEST['eng4']=="thigh" || @$_REQUEST['eng4']=="Thigh" && @$_REQUEST['eng5']=="throat" || @$_REQUEST['eng5']=="Throat" && @$_REQUEST['eng6']=="thumb" || @$_REQUEST['eng6']=="Thumb" && @$_REQUEST['eng7']=="toe" || @$_REQUEST['eng7']=="Toe"){
echo "<h2>Огонь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/2-1.php'>2 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>