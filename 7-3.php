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
if (@$_REQUEST['eng1']=="citizenship")
	
	{
		echo "<b> 176.Гражданство: citizenship</b>";
	
		$eng1="citizenship";
	}
	else
	{
		echo "176-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="dual citizenship")
	
	{
		echo "<b> 177.Двойное гражданство: dual citizenship</b>";
		$eng2="dual citizenship";
	}
	else
	{
		echo "177-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="grant citizenship")
	
	{
		echo "<b> 178.Предоставить гражданство:grant citizenship</b>";
		$eng3="grant citizenship";
	}
	else
	{
		echo "178-Неверно.";
	}
	if (@$_REQUEST['eng4']=="revoke smb.'s citizenship")
	
	{
		echo "<b> 179.Лишить кого-либо гражданства: revoke smb.'s citizenship</b>";
		$eng4="evoke smb.'s citizenship";
	}
	else
	{
		echo "179-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="curriculum vitae")
	
	{
		echo "<b> 180.Резюме(сведения об образовании и профессиональном опыте):curriculum vitae</b>";
		$eng5="curriculum vitae";
	}
	else
	{
		echo "180-Неверно.";
	}
if (@$_REQUEST['eng6']=="driving license")
	
	{
		echo "<b> 181.Водительское удостоверение: driving license</b>";
		$eng6="driving license";
	}
	else
	{
		echo "181-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="identity card")
	
	{
		echo "<b> 182.Удостоверение личности: identity card</b>";
		$eng7="identity card";
	}
	else
	{
		echo "182-неверно";
	}
	
}
?>
<br>
Cемейное положение,анкетные данные:






176.dual citizenship
177.citizenship
178.grant citizenship
179.identity card
180.curriculum vitae
181.revoke smb's citizenship
182.driving license




























<form action="7-3.php" method="post">
<p>
Гражданство:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Двойное гражданство:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Предоставить гражданство:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Лишить кого-либо гражданства:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Резюме:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Водительское право:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Удостоверение личности:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="citizenship" && @$_REQUEST['eng2']=="dual citizenship" && @$_REQUEST['eng3']=="grant citizenship" && @$_REQUEST['eng4']=="revoke smb.'s citizenship" && @$_REQUEST['eng5']=="curriculum vitae" && @$_REQUEST['eng6']=="driving license" && @$_REQUEST['eng7']=="identity card"){
echo "<h2>Ты жжёшь. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/7-4.php'>7 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>