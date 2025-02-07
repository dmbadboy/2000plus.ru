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
	
	
	if (@$_REQUEST['eng1']=="parcel")
	
	{
		echo "<b> 896.Посылка: parcel</b>";
		$eng1="parcel";
	}
	else
	{
		echo "896-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="post")
	
	{
		echo "<b> 897.Почта: post</b>";
	
		$eng2="post";
	}
	else
	{
		echo "897-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="post office")
	
	{
			echo "<b> 898.Почтовое отделение:post office</b>";
	
		$eng3="post office";
		
		
	}
	else
	{
		echo "898-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="postal code")
	
	{
		echo "<b> 899.Почтовый индекс:postal code</b>";
		$eng4="postal code";
		
		
	}
	else
	{
		echo "899-Неверно.";
	}
	if (@$_REQUEST['eng5']=="postage")
	
	{
		echo "<b> 900.Почтовая оплата,почтовые расходы: postage</b>";
		$eng5="postage";
		
		
	}
	else
	{
		echo "900-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="postcard")
	
	{
		echo "<b> 901.Открытка:postcard</b>";
		$eng6="postcard";
		
		
	}
	else
	{
		echo "901.Неверно.";
	}
if (@$_REQUEST['eng7']=="poste restante")
	
	{
		echo "<b> 902.Экспресс-почта:poste restante";
		$eng7="poste restante";
		
		
	}
	else
	{
		echo "902-Неверно.";
	}
	
	
}
?>
<br>
Почта
</b>


















































896.post
897.postage
898.postal code
899.post office
900.postcard
901.parcel
902.poste restante

















































<form action="33-3.php" method="post">
<p>
Посылка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Почта:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Почтовое отделение:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Почтовый индекс:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Почтовая оплата,почтовые расходы:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Открытка:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
До востребования (надпись на конверте):<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="parcel" && @$_REQUEST['eng2']=="post" && @$_REQUEST['eng3']=="post office" && @$_REQUEST['eng4']=="postal code" && @$_REQUEST['eng5']=="postage" && @$_REQUEST['eng6']=="postcard" && @$_REQUEST['eng7']=="poste restante"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/33-4.php'>33 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>