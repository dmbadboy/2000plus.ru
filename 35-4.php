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
	
	
	if (@$_REQUEST['eng1']=="lira")
	
	{
		echo "<b> 965.Лира: lira</b>";
		$eng1="lira";
	}
	else
	{
		echo "965-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="mark")
	
	{
		echo "<b> 966.Марка: mark</b>";
	
		$eng2="mark";
	}
	else
	{
		echo "966-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="penny")
	
	{
			echo "<b> 967.Пени: penny</b>";
	
		$eng3="penny";
		
		
	}
	else
	{
		echo "967-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="two pence")
	
	{
		echo "<b> 968.Два пенса: two pence</b>";
		$eng4="two pence";
		
		
	}
	else
	{
		echo "968-Неверно.";
	}
	if (@$_REQUEST['eng5']=="peseta")
	
	{
		echo "<b> 969.Песета: peseta/b>";
		$eng5="peseta";
		
		
	}
	else
	{
		echo "969-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="peso")
	
	{
		echo "<b> 970.Песо:peso</b>";
		$eng6="peso";
		
		
	}
	else
	{
		echo "970.Неверно.";
	}
if (@$_REQUEST['eng7']=="pound sterling")
	
	{
		echo "<b> 971.Фунт серлингов:pound sterling";
		$eng7="pound sterling";
		
		
	}
	else
	{
		echo "971-Неверно.";
	}
	
	
}
?>
<br>
Деньги
</b>






















































965.lira
966.penny
967.peseta
968.two pence
969.peso
970.mark
971.pound sterling

















































<form action="35-4.php" method="post">
<p>
Лира:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Марка:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Пенс:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Два пенса:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Песета:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Песо:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Фунт стерлингов:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="lira" && @$_REQUEST['eng2']=="mark" && @$_REQUEST['eng3']=="penny" && @$_REQUEST['eng4']=="two pence" && @$_REQUEST['eng5']=="peseta" && @$_REQUEST['eng6']=="peso" && @$_REQUEST['eng7']=="pound sterling"){
echo "<h2>Кто сегодня молодец? Ты сегодня молодец. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/36-1.php'>36 день: 1 урок</a>";
	}	
}
	

?>
</body>
</html>