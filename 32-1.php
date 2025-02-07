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
	
	
	if (@$_REQUEST['eng1']=="column")
	
	{
		echo "<b> 855.Рубрика, раздел (к журналу и т.п): column</b>";
		$eng1="column";
	}
	else
	{
		echo "855-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="society column")
	
	{
		echo "<b> 856.Раздел светской хроники (в газете):society column</b>";
	
		$eng2="society column";
	}
	else
	{
		echo "856-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="correspondent")
	
	{
			echo "<b> 857.Кореспондент) :correspondent</b>";
	
		$eng3="correspondent";
		
		
	}
	else
	{
		echo "857-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="editor")
	
	{
		echo "<b> 858.Редактор: editor</b>";
		$eng4="editor";
		
		
	}
	else
	{
		echo "858-Неверно.";
	}
	if (@$_REQUEST['eng5']=="editor-in-chief")
	
	{
		echo "<b> 859.Главный редактор:editor-in-chief</b>";
		$eng5="editor-in-chief";
		
		
	}
	else
	{
		echo "859-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="editorial")
	
	{
		echo "<b> 860.Передовая статья, передовица:editorial</b>";
		$eng6="editorial";
		
		
	}
	else
	{
		echo "860.Неверно.";
	}
if (@$_REQUEST['eng7']=="editorial board")
	
	{
		echo "<b> 861.Тираж: editorial board";
		$eng7="editorial board";
		
		
	}
	else
	{
		echo "861-Неверно.";
	}
	
	
}
?>
<br>
Пресса
</b>












































856.society column 
880.editorial
857.correspondent
859.editor-in-chief
858.editor
855.column
881.editorial board


















































<form action="32-1.php" method="post">
<p>
Рубрика,раздел (в газете, журнале):<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Раздел светской хроники (в газете):<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Кореспондент:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Редактор:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Главный редактор:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Передовая статья, передовица:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Редколлегия:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="column" && @$_REQUEST['eng2']=="society column" && @$_REQUEST['eng3']=="correspondent" && @$_REQUEST['eng4']=="editor" && @$_REQUEST['eng5']=="editor-in-chief" && @$_REQUEST['eng6']=="editorial" && @$_REQUEST['eng7']=="editorial board"){
echo "<h2>Замечательно. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/32-2.php'>32 день: 2 урок</a>";
	}	
}
	

?>
</body>
</html>