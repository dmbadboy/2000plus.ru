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
if (@$_REQUEST['eng1']=="pine nut")
	
	{
		echo "<b> 547.Кедровый орех: pine nut</b>";
	
		$eng1="pine nut";
	}
	else
	{
		echo "547-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="pistachio")
	
	{
		echo "<b> 548.Фисташка: pistachio</b>";
		$eng2="pistachio";
	}
	else
	{
		echo "548-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="aftershave (lotion)")
	
	{
		echo "<b> 549.Лосьён после бритья:aftershave (lotion)</b>";
		$eng3="aftershave (lotion)";
	}
	else
	{
		echo "549-Неверно.";
	}
	if (@$_REQUEST['eng4']=="cologne")
	
	{
		echo "<b> 550.Одекалон: cologne</b>";
		$eng4="cologne";
	}
	else
	{
		echo "550-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="cream")
	
	{
		echo "<b> 551.Крем: cream</b>";
		$eng5="cream";
	}
	else
	{
		echo "551.Неверно.";
	}
if (@$_REQUEST['eng6']=="deodarant")
	
	{
		echo "<b> 552.Дезодорант: deodarant</b>";
		$eng6="deodarant";
	}
	else
	{
		echo "552-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="eyebrow pencil")
	
	{
		echo "<b> 553.Карандаш для бровей: eyebrow pencil</b>";
		$eng7="eyebrow pencil";
	}
	else
	{
		echo "553-неверно";
	}
	
}
?>
<br>
Орехи,косметика и гигиенические средства:
</b>




547.aftershave (lotion)
548.pistachio
549.cream
550.cologne
551.deodarant
552.pine nut
553.eyebrow pencil























































<form action="20-4.php" method="post">
<p>
Кедровый орех:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Фисташка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Лосьён после бритья:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Одекалон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Крем:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Дезодорант:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Карандаш для бровей:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="pine nut" && @$_REQUEST['eng2']=="pistachio" && @$_REQUEST['eng3']=="aftershave (lotion)" && @$_REQUEST['eng4']=="cologne" && @$_REQUEST['eng5']=="cream" && @$_REQUEST['eng6']=="deodarant" && @$_REQUEST['eng7']=="eyebrow pencil"){
echo "<h2>Браво. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/21-1.php'>21 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>