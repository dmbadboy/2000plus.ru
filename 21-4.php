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
if (@$_REQUEST['eng1']=="bracelet")
	
	{
		echo "<b> 575.Браслет: bracelet</b>";
	
		$eng1="bracelet";
	}
	else
	{
		echo "575-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="brooch")
	
	{
		echo "<b> 576.Брошь: brooch</b>";
		$eng2="brooch";
	}
	else
	{
		echo "576-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="earring")
	
	{
		echo "<b> 577.Серьги :earring</b>";
		$eng3="earring";
	}
	else
	{
		echo "577-Неверно.";
	}
	if (@$_REQUEST['eng4']=="gold")
	
	{
		echo "<b> 578.Золото: gold</b>";
		$eng4="gold";
	}
	else
	{
		echo "578-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="necklace")
	
	{
		echo "<b> 579.Ожерелье: necklace";
		$eng5="necklace";
	}
	else
	{
		echo "579.Неверно.";
	}
if (@$_REQUEST['eng6']=="pearl")
	
	{
		echo "<b> 580.Жемчуг: pearl</b>";
		$eng6="pearl";
	}
	else
	{
		echo "580-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="pendant")
	
	{
		echo "<b> 581.Кулон: pendant</b>";
		$eng7="pendant";
	}
	else
	{
		echo "581-неверно";
	}
	
}
?>
<br>
Ювелирные украшения:
</b>







575.brooch
576.bracelet
577.gold
578.earring
579.pearl
580.necklace
581.pendant






















































+
<form action="21-4.php" method="post">
<p>
Браслет:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Брошь:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Серьга:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Золото:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Ожерелье:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Жемчуг:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Кулон:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="bracelet" && @$_REQUEST['eng2']=="brooch" && @$_REQUEST['eng3']=="earring" && @$_REQUEST['eng4']=="gold" && @$_REQUEST['eng5']=="necklace" && @$_REQUEST['eng6']=="pearl" && @$_REQUEST['eng7']=="pendant"){
echo "<h2>Ты сегодня жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/22-1.php'>22 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>