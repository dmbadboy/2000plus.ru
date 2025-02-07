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
if (@$_REQUEST['eng1']=="breeches")
	
	{
		echo "<b> 239.Бриджи: breeches</b>";
	
		$eng1="breeches";
	}
	else
	{
		echo "239-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="coat")
	
	{
		echo "<b> 240.Пальто: coat</b>";
		$eng2="coat";
	}
	else
	{
		echo "240-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="fur coat")
	
	{
		echo "<b> 234.Меховое пальто,шуба:fur coat</b>";
		$eng3="fur coat";
	}
	else
	{
		echo "241-Неверно.";
	}
	if (@$_REQUEST['eng4']=="costume")
	
	{
		echo "<b> 242.Костюм: costume</b>";
		$eng4="costume";
	}
	else
	{
		echo "242-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="coverall")
	
	{
		echo "<b> 243.Комбинезон:coverall</b>";
		$eng5="coverall";
	}
	else
	{
		echo "243-Неверно.";
	}
if (@$_REQUEST['eng6']=="dress")
	
	{
		echo "<b> 244.Платье: dress</b>";
		$eng6="dress";
	}
	else
	{
		echo "244-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="dressing gown")
	
	{
		echo "<b> 238.Халат: dressing gown</b>";
		$eng7="dressing gown";
	}
	else
	{
		echo "245-неверно";
	}
	
}
?>
<br>
Одежда:

239.dressing gown
240.breeches
241.coat
242.fur coat
243.costume
244.coverall
245.dress































<form action="9-4.php" method="post">
<p>
Бриджи:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Пальто:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Меховое пальто,шуба:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Костюм:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Комбинезон:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Платье:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Халат:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="breeches" && @$_REQUEST['eng2']=="coat" && @$_REQUEST['eng3']=="fur coat" && @$_REQUEST['eng4']=="costume" && @$_REQUEST['eng5']=="coverall" && @$_REQUEST['eng6']=="dress" && @$_REQUEST['eng7']=="dressing gown"){
echo "<h2>Огонь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/10-1.php'>10 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>