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
	
	
	if (@$_REQUEST['eng1']=="satellite television")
	
	{
		echo "<b> 848.Спутниковое телевиденье: satellite television</b>";
		$eng1="satellite television";
	}
	else
	{
		echo "848-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="viewer")
	
	{
		echo "<b> 849.Телезритель:viewer</b>";
	
		$eng2="viewer";
	}
	else
	{
		echo "849-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="advertise")
	
	{
			echo "<b> 850.Рекламировать, помещать объявление (в СМИ) :advertise</b>";
	
		$eng3="advertise";
		
		
	}
	else
	{
		echo "850-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="advertisement")
	
	{
		echo "<b> 851.Рекламное объявление: advertisement</b>";
		$eng4="advertisement";
		
		
	}
	else
	{
		echo "851-Неверно.";
	}
	if (@$_REQUEST['eng5']=="appendix")
	
	{
		echo "<b> 852.Приложение к (журналу и т.п):appendix</b>";
		$eng5="appendix";
		
		
	}
	else
	{
		echo "852-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="article")
	
	{
		echo "<b> 853.Статья:article</b>";
		$eng6="article";
		
		
	}
	else
	{
		echo "853.Неверно.";
	}
if (@$_REQUEST['eng7']=="circulation")
	
	{
		echo "<b> 854.Тираж: circulation";
		$eng7="circulation";
		
		
	}
	else
	{
		echo "854-Неверно.";
	}
	
	
}
?>
<br>
Средство массовой информации, пресса
</b>











































848.viewer
849.appendix
850.advertisement
851.advertise
852.article
853.satellite television
854.circulation


















































<form action="31-4.php" method="post">
<p>
Спутниковое телевиденье:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Телезритель:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Рекламировать, помещать объявление (в СМИ):<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Рекламное объявление:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Приложение (к журналу и т.п):<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Статья:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Тираж:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="satellite television" && @$_REQUEST['eng2']=="viewer" && @$_REQUEST['eng3']=="advertise" && @$_REQUEST['eng4']=="advertisement" && @$_REQUEST['eng5']=="appendix" && @$_REQUEST['eng6']=="article" && @$_REQUEST['eng7']=="circulation"){
echo "<h2>Отличная работа. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/32-1.php'>32 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>