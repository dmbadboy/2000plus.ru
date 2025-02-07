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
	
	
	if (@$_REQUEST['eng1']=="post-office")
	
	{
		echo "<b> 1014.Почтовое отправления: post-office</b>";
		$eng1="post-office";
	}
	else
	{
		echo "1014-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="repair shop")
	
	{
		echo "<b> 1015.Ремонтная мастерская: repair shop</b>";
	
		$eng2="repair shop";
	}
	else
	{
		echo "1015-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="salon")
	
	{
			echo "<b> 1016.Салон, ателье: salon</b>";
	
		$eng3="salon";
		
		
	}
	else
	{
		echo "1016-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="shop")
	
	{
		echo "<b> 1017.Магазин: shop</b>";
		$eng4="shop";
		
		
	}
	else
	{
		echo "1017-Неверно.";
	}
	if (@$_REQUEST['eng5']=="shop window")
	
	{
		echo "<b> 1018.Витрина: shop window</b>";
		$eng5="shop window";
		
		
	}
	else
	{
		echo "1018-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="skyscraper")
	
	{
		echo "<b> 1019.Небоскрёб:skyscraper</b>";
		$eng6="skyscraper";
		
		
	}
	else
	{
		echo "1019.Неверно.";
	}
if (@$_REQUEST['eng7']=="stadium")
	
	{
		echo "<b> 1020.Стадион:stadium";
		$eng7="stadium";
		
		
	}
	else
	{
		echo "1020-Неверно.";
	}
	
	
}
?>
<br>
Инфрастуктура города
</b>























































1014.repair shop
1015.salon
1016.shop window
1017.shop
1018.skyscraper
1019.post-office
1020.stadium

















































<form action="37-3.php" method="post">
<p>
Почтовое отделение:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Ремонтная масерская:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Салон, ателье:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Магазин:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Витрина:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Небоскрёб:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Стадион:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="post-office" && @$_REQUEST['eng2']=="repair shop" && @$_REQUEST['eng3']=="salon" && @$_REQUEST['eng4']=="shop" && @$_REQUEST['eng5']=="shop window" && @$_REQUEST['eng6']=="skyscraper" && @$_REQUEST['eng7']=="stadium"){
echo "<h2>Так держать. Молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/37-4.php'>37 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>