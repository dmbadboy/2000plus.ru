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
	
	
	if (@$_REQUEST['eng1']=="telephone number")
	
	{
		echo "<b> 924.Номер телефона: telephone number</b>";
		$eng1="telephone number";
	}
	else
	{
		echo "924-неверно";
	}
	
	
	
if (@$_REQUEST['eng2']=="token")
	
	{
		echo "<b> 925.Жетон: token</b>";
	
		$eng2="token";
	}
	else
	{
		echo "925-Неверно.";
	}
	
	if (@$_REQUEST['eng3']=="account")
	
	{
			echo "<b> 926.Счёт: account</b>";
	
		$eng3="account";
		
		
	}
	else
	{
		echo "926-Неверно.";
	}
	
	
	if (@$_REQUEST['eng4']=="current account")
	
	{
		echo "<b> 927.Текущий счёт: current account</b>";
		$eng4="current account";
		
		
	}
	else
	{
		echo "927-Неверно.";
	}
	if (@$_REQUEST['eng5']=="deposit account")
	
	{
		echo "<b> 928.Сберегательный счёт: deposit account</b>";
		$eng5="deposit account";
		
		
	}
	else
	{
		echo "928-Неверно.";
	}
	
	if (@$_REQUEST['eng6']=="personal account")
	
	{
		echo "<b> 929.Лицевой счёт:personal account</b>";
		$eng6="personal account";
		
		
	}
	else
	{
		echo "929.Неверно.";
	}
if (@$_REQUEST['eng7']=="bank")
	
	{
		echo "<b> 930.Банк:bank";
		$eng7="bank";
		
		
	}
	else
	{
		echo "930-Неверно.";
	}
	
	
}
?>
<br>
Телефон,банковские услуги
</b>





















































930.telephone number
931.account
932.token
933.deposit account
934.current account
935.personal account
936.bank

















































<form action="34-3.php" method="post">
<p>
Номер телефона:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Жетон:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Счёт:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Текущий счёт:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Депозитный счёт, сберегательный счёт:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Лицевой счёт:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
<p>
Банк:<input type="text" name="eng7" value="<?=@$eng7?>"/>
</p>
<p>
:<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="telephone number" && @$_REQUEST['eng2']=="token" && @$_REQUEST['eng3']=="account" && @$_REQUEST['eng4']=="current account" && @$_REQUEST['eng5']=="deposit account" && @$_REQUEST['eng6']=="personal account" && @$_REQUEST['eng7']=="bank"){
echo "<h2>Кто-то сегодня в ударе. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/34-4.php'>34 день: 4 урок</a>";
	}	
}
	

?>
</body>
</html>