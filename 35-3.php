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
	
	
	if (@$_REQUEST['eng1']=="cent")
	
	{
		echo "<b> 958.Цент: cent</b>";
		$eng1="cent";
	}
	else
	{
		echo "958-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="change")
	
	{
		echo "<b> 959.Сдача, мелкие деньги,мелочь: change</b>";
	
		$eng2="change";
	}
	else
	{
		echo "959-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="coin")
	
	{
			echo "<b> 960.Монета: coin</b>";
	
		$eng3="coin";
		
		
	}
	else
	{
		echo "960-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="copeck")
	
	{
		echo "<b> 961.Копейка: copeck</b>";
		$eng4="copeck";
		
		
	}
	else
	{
		echo "961-Неверно.";
	}
	if (@$_REQUEST['eng5']=="dollar")
	
	{
		echo "<b> 962.Доллар: dollar/b>";
		$eng5="dollar";
		
		
	}
	else
	{
		echo "962-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="euro")
	
	{
		echo "<b> 963.евро:euro</b>";
		$eng6="euro";
		
		
	}
	else
	{
		echo "963.Неверно.";
	}
if (@$_REQUEST['eng7']=="franc")
	
	{
		echo "<b> 964.Франк:franc";
		$eng7="franc";
		
		
	}
	else
	{
		echo "964-Неверно.";
	}
	
	
}
?>
<br>
Деньги
</b>






















































951.cent
952.coin
953.dollar
954.copeck
955.euro
956.change
957.franc

















































<form action="35-3.php" method="post">
<p>
Цент:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Сдача, мелкие деньги, мелочь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Монета:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Копейка:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Доллар:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Евро:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Франк:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="cent" && @$_REQUEST['eng2']=="change" && @$_REQUEST['eng3']=="coin" && @$_REQUEST['eng4']=="copeck" && @$_REQUEST['eng5']=="dollar" && @$_REQUEST['eng6']=="euro" && @$_REQUEST['eng7']=="franc"){
echo "<h2>Кто-то сегодня в ударе. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/35-4.php'>35 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>