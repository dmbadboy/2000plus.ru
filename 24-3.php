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
	
	
	if (@$_REQUEST['eng1']=="measles")
	
	{
		echo "<b> 645.Корь: measles</b>";
		$eng1="measles";
	}
	else
	{
		echo "645-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="mumps")
	
	{
		echo "<b> 646.Свинка:mumps</b>";
	
		$eng2="mumps";
	}
	else
	{
		echo "646-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="nephritis")
	
	{
			echo "<b> 647.Воспаление почек: nephritis</b>";
	
		$eng3="nephritis";
		
		
	}
	else
	{
		echo "647-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="pneumania")
	
	{
		echo "<b> 648.Воспаление лёгких: pneumania</b>";
		$eng4="pneumania";
		
		
	}
	else
	{
		echo "648-Неверно.";
	}
	if (@$_REQUEST['eng5']=="poisoning")
	
	{
		echo "<b> 649.Отравление:poisoning</b>";
		$eng5="poisoning";
		
		
	}
	else
	{
		echo "649-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="scarlet fever")
	
	{
		echo "<b> 650.Скарлатина: scarlet fever</b>";
		$eng6="scarlet fever";
		
		
	}
	else
	{
		echo "650.Неверно.";
	}
if (@$_REQUEST['eng7']=="sneeze")
	
	{
		echo "<b> 651.Чихать: sneeze";
		$eng7="sneeze";
		
		
	}
	else
	{
		echo "651-Неверно.";
	}
	
	
}
?>
<br>
Симптомы и болезни:
</b>















645.mumps
646.scarlet fever
647.pneumania
648.nephritis
649.poisoning
650.measles
651.sneeze


















































<form action="24-3.php" method="post">
<p>
Корь:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Свинка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Воспаление почек:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Воспаление лёгких:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Отравление:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Скарлатина:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Чихать:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="measles" && @$_REQUEST['eng2']=="mumps" && @$_REQUEST['eng3']=="nephritis" && @$_REQUEST['eng4']=="pneumania" && @$_REQUEST['eng5']=="poisoning" && @$_REQUEST['eng6']=="scarlet fever" && @$_REQUEST['eng7']=="sneeze"){
echo "<h2>Отлично. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/24-3.php'>24 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>