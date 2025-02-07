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
if (@$_REQUEST['eng1']=="lungs" || @$_REQUEST['eng1']=="Lungs")
	
	{
		echo "<b>36.Лёгкие: lungs</b>";
	
		$eng1="lungs";
	}
	else
	{
		echo "36-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="pancreas" || @$_REQUEST['eng2']=="Pancreas")
	
	{
		echo "<b>37.Поджелудочная железа: pancreas </b>";
		$eng2="pancreas";
	}
	else
	{
		echo "37-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="spleen" || @$_REQUEST['eng3']=="Spleen")
	
	{
		echo "<b>38.Селезёнка:spleen</b>";
		$eng3="spleen";
	}
	else
	{
		echo "38-Неверно.";
	}
	if (@$_REQUEST['eng4']=="stomach" || @$_REQUEST['eng4']=="Stomach")
	
	{
		echo "<b>39.Желудок: stomach </b>";
		$eng4="stomach";
	}
	else
	{
		echo "39-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="urinary bladder" || @$_REQUEST['eng5']=="Urinary bladder")
	
	{
		echo "<b>40.Мочевой  пузырь: urinary bladder</b>";
		$eng5="urinary bladder";
	}
	else
	{
		echo "40-Неверно.";
	}
if (@$_REQUEST['eng6']=="beard" || @$_REQUEST['eng6']=="Beard")
	
	{
		echo "<b>41.Борода: beard</b>";
		$eng6="beard";
	}
	else
	{
		echo "41-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="cheek" || @$_REQUEST['eng7']=="Cheek")
	
	{
		echo "<b>42.Борода: cheek</b>";
		$eng7="cheek";
	}
	else
	{
		echo "42-неверно";
	}
	
}
?>
<br>
Внутренние органы,голова и лицо:

36.spleen
37.cheek
38.beard
39.lungs
40.urinary bladder
41.pancreas
42.stomach






<form action="2-2.php" method="post">
<p>
Лёгкие:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Поджелудочная железа:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Селезёнка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Желудок:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Мочевой пузырь:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Борода:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Щёка:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="lungs" || @$_REQUEST['eng1']=="Lungs" && @$_REQUEST['eng2']=="pancreas" || @$_REQUEST['eng2']=="Pancreas" && @$_REQUEST['eng3']=="spleen" || @$_REQUEST['eng3']=="Spleen" && @$_REQUEST['eng4']=="stomach" || @$_REQUEST['eng4']=="Stomach" && @$_REQUEST['eng5']=="urinary bladder" || @$_REQUEST['eng5']=="Urinary bladder" && @$_REQUEST['eng6']=="beard" || @$_REQUEST['eng6']=="Beard" && @$_REQUEST['eng7']=="cheek" || @$_REQUEST['eng7']=="Cheek"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/2-3.php'>2 день: 3 урок</a>";
	}	
}
	

?>
</body>
</html>