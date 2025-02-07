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
if (@$_REQUEST['eng1']=="rusk")
	
	{
		echo "<b> 484.Сухарь,сухарик: rusk</b>";
	
		$eng1="rusk";
	}
	else
	{
		echo "484-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="tart")
	
	{
		echo "<b> 485.Фруктовое пироженное: tart</b>";
		$eng2="tart";
	}
	else
	{
		echo "485-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="toffy")
	
	{
		echo "<b> 486.Ириска:toffy</b>";
		$eng3="toffy";
	}
	else
	{
		echo "486-Неверно.";
	}
	if (@$_REQUEST['eng4']=="apple")
	
	{
		echo "<b> 487.Яблоко: apple/b>";
		$eng4="apple";
	}
	else
	{
		echo "487-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="apricot")
	
	{
		echo "<b> 488.Абрикос: apricot</b>";
		$eng5="apricot";
	}
	else
	{
		echo "488.Неверно.";
	}
if (@$_REQUEST['eng6']=="avocado")
	
	{
		echo "<b> 489.Авокадо: avocado</b>";
		$eng6="avocado";
	}
	else
	{
		echo "489-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="banana")
	
	{
		echo "<b> 490.Банан: banana</b>";
		$eng7="banana";
	}
	else
	{
		echo "490-неверно";
	}
	
}
?>
<br>
Выпечка и когндитерские изделия,фрукты:
</b>

484.banana
485.tart
486.rusk
487.apple
488.toffy
489.avocado
490.apricot






















































<form action="18-3.php" method="post">
<p>
Сухарь, сухарик:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Фруктовое пироженное:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Ириска:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Яблоко:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Абрикос:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Авокадо:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Банан:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="rusk" && @$_REQUEST['eng2']=="tart" && @$_REQUEST['eng3']=="toffy" && @$_REQUEST['eng4']=="apple" && @$_REQUEST['eng5']=="apricot" && @$_REQUEST['eng6']=="avocado" && @$_REQUEST['eng7']=="banana"){
echo "<h2>Круто. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/18-4.php'>18 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>