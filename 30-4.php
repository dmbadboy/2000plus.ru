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
	
	
	if (@$_REQUEST['eng1']=="staple")
	
	{
		echo "<b> 820.Скобка, скоба: staple</b>";
		$eng1="staple";
	}
	else
	{
		echo "820-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="stapler")
	
	{
		echo "<b> 821.Степлер:stapler</b>";
	
		$eng2="stapler";
	}
	else
	{
		echo "821-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="telephone")
	
	{
			echo "<b> 822.Телефон:telephone</b>";
	
		$eng3="telephone";
		
		
	}
	else
	{
		echo "822-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="mobile phone")
	
	{
		echo "<b> 823.Мобильный телефон: mobile phone</b>";
		$eng4="mobile phone";
		
		
	}
	else
	{
		echo "823-Неверно.";
	}
	if (@$_REQUEST['eng5']=="wastepaper-basket")
	
	{
		echo "<b> 824.Корзина для мусора:wastepaper-basket</b>";
		$eng5="wastepaper-basket";
		
		
	}
	else
	{
		echo "824-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="Xerox")
	
	{
		echo "<b> 825.Ксерокс:Xerox</b>";
		$eng6="Xerox";
		
		
	}
	else
	{
		echo "825.Неверно.";
	}
if (@$_REQUEST['eng7']=="aerial")
	
	{
		echo "<b> 826.Антена: aerial";
		$eng7="aerial";
		
		
	}
	else
	{
		echo "826-Неверно.";
	}
	
	
}
?>
<br>
Офис,радио и телевиденье,средство массовой информации
</b>







































820.stapler
821.staple
822.nobile phone
823.telephone
824.Xerox
825.wastepaper-basket
826.aerial


















































<form action="30-4.php" method="post">
<p>
Скобка, скоба:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Степлер:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Телефон:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Мобильный телефон:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Корзина для мусора:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Ксерокс:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Антенна:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="staple" && @$_REQUEST['eng2']=="stapler" && @$_REQUEST['eng3']=="telephone" && @$_REQUEST['eng4']=="mobile phone" && @$_REQUEST['eng5']=="wastepaper-basket" && @$_REQUEST['eng6']=="Xerox" && @$_REQUEST['eng7']=="aerial"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/31-1.php'>31 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>