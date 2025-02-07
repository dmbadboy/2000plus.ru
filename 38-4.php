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
	
	
	if (@$_REQUEST['eng1']=="footlights")
	
	{
		echo "<b> 1049.Рампа: footlights</b>";
		$eng1="footlights";
	}
	else
	{
		echo "1049-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="foyer")
	
	{
		echo "<b> 1050.Фойе: foyer</b>";
	
		$eng2="foyer";
	}
	else
	{
		echo "1050-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="intermission")
	
	{
			echo "<b> 1051.Антракт: intermission</b>";
	
		$eng3="intermission";
		
		
	}
	else
	{
		echo "1051-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="matinee")
	
	{
		echo "<b> 1052.Дневной спектакль: matinee</b>";
		$eng4="matinee";
		
		
	}
	else
	{
		echo "1052-Неверно.";
	}
	if (@$_REQUEST['eng5']=="opening of a season")
	
	{
		echo "<b> 1052.Открытие сезона: opening of a season</b>";
		$eng5="opening of a season";
		
		
	}
	else
	{
		echo "1052-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="opera house")
	
	{
		echo "<b> 1054.Оперный театр:opera house</b>";
		$eng6="opera house";
		
		
	}
	else
	{
		echo "1054.Неверно.";
	}
if (@$_REQUEST['eng7']=="performance")
	
	{
		echo "<b> 1055.Спектакль:performance";
		$eng7="performance";
		
		
	}
	else
	{
		echo "1055-Неверно.";
	}
	
	
}
?>
<br>
Развлечения
</b>























































1042.footlights
1043.intermission
1044.matinee
1045,opera house
1046.opening of a season
1047.foyer
1048.performance

















































<form action="38-4.php" method="post">
<p>
Рампа:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Фоее:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
<p>
Антракт:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
Дневной спектакль:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Открытие сезона:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Оперный театр:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Спектакль:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="footlights" && @$_REQUEST['eng2']=="foyer" && @$_REQUEST['eng3']=="intermission" && @$_REQUEST['eng4']=="matinee" && @$_REQUEST['eng5']=="opening of season" && @$_REQUEST['eng6']=="opera house" && @$_REQUEST['eng7']=="performance"){
echo "<h2>Кто-то сегодня стал умнеее и выучил 7 слов. Так держать. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/39-1.php'>39 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>