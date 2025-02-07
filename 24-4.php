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
	
	
	if (@$_REQUEST['eng1']=="sore")
	
	{
		echo "<b> 652.Балячка, рана, язва: sore</b>";
		$eng1="sore";
	}
	else
	{
		echo "652-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="sore throat")
	
	{
		echo "<b> 653.Больное горло:sore throat</b>";
	
		$eng2="sore throat";
	}
	else
	{
		echo "653-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="sprain")
	
	{
			echo "<b> 654.Растяжение связок: sprain</b>";
	
		$eng3="sprain";
		
		
	}
	else
	{
		echo "654-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="temperature")
	
	{
		echo "<b> 655.Температура, жар: temperature</b>";
		$eng4="temperature";
		
		
	}
	else
	{
		echo "655-Неверно.";
	}
	if (@$_REQUEST['eng5']=="tonsilitis")
	
	{
		echo "<b> 656.Ангина, тонзилит:tonsilitis</b>";
		$eng5="tonsilitis";
		
		
	}
	else
	{
		echo "656-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="ulcer")
	
	{
		echo "<b> 657.Язва: ulcer</b>";
		$eng6="ulcer";
		
		
	}
	else
	{
		echo "657.Неверно.";
	}
if (@$_REQUEST['eng7']=="anaestetic")
	
	{
		echo "<b> 658.Наркоз: anaestetic";
		$eng7="anaestetic";
		
		
	}
	else
	{
		echo "658-Неверно.";
	}
	
	
}
?>
<br>
Симптомы и болезни,лечение:
</b>
















652.sore throat
653.tonsilitis
654.temperature
655.sprain
656.ulcer
657.sore
658.anaestetic


















































<form action="24-4.php" method="post">
<p>
Болячка, рана, язва:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Больное горло:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Растяжение связок:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Температура, жар:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ангина, тонзелит:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Язва:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Наркоз:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="sore" && @$_REQUEST['eng2']=="sore throat" && @$_REQUEST['eng3']=="sprain" && @$_REQUEST['eng4']=="temperature" && @$_REQUEST['eng5']=="tonsilitis" && @$_REQUEST['eng6']=="ulcer" && @$_REQUEST['eng7']=="anaestetic"){
echo "<h2>Супер. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/24-3.php'>25 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>