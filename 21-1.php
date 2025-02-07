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
if (@$_REQUEST['eng1']=="eyeliner (pencil)")
	
	{
		echo "<b> 554.Карандаш для век: eyeliner (pencil)</b>";
	
		$eng1="eyeliner (pencil)";
	}
	else
	{
		echo "554-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="gel")
	
	{
		echo "<b> 555.Гель: gel</b>";
		$eng2="gel";
	}
	else
	{
		echo "555-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="hairspray")
	
	{
		echo "<b> 556.Лак для волос:hairspray</b>";
		$eng3="hairspray";
	}
	else
	{
		echo "556-Неверно.";
	}
	if (@$_REQUEST['eng4']=="lipstick")
	
	{
		echo "<b> 557.Губная помада: lipstick</b>";
		$eng4="lipstick";
	}
	else
	{
		echo "557-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="make-up")
	
	{
		echo "<b> 558.Грим, косметика: make-up</b>";
		$eng5="make-up";
	}
	else
	{
		echo "558.Неверно.";
	}
if (@$_REQUEST['eng6']=="remover make-up")
	
	{
		echo "<b> 559.Лосьён для снятия макияжа: remover make-up</b>";
		$eng6="remover make-up";
	}
	else
	{
		echo "559-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="mascara")
	
	{
		echo "<b> 560.Тушь для ресниц: mascara</b>";
		$eng7="mascara";
	}
	else
	{
		echo "560-неверно";
	}
	
}
?>
<br>
Орехи,косметика и гигиенические средства:
</b>





554.gel
555.lipstick
546.hairspray
557.remover make-up
558.make-up
559.eyeliner (pencil)
560.mascara























































<form action="21-1.php" method="post">
<p>
Карандаш для век:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Гель:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Лак для волос:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Губная помада:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Грим, косметика:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Лосьён для снятия макияжа:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Тушь для ресниц:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="eyeliner (pencil)" && @$_REQUEST['eng2']=="gel" && @$_REQUEST['eng3']=="hairspray" && @$_REQUEST['eng4']=="lipstick" && @$_REQUEST['eng5']=="make-up" && @$_REQUEST['eng6']=="remover make-up" && @$_REQUEST['eng7']=="mascara"){
echo "<h2>Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/21-2.php'>21 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>