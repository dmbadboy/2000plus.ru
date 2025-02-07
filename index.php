<!DOCTYPE html>
<html lang="ru">

<head>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(99666602, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99666602" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
 <link rel="icon" href="https://2000plus.ru/favicon.ico" type="image/x-icon">
<title>Угадай слово.</title>
<link rel="stylesheet" href="/style/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="decription" content="Освой 2000 самых распространнёных слов в английском языке."/>
<meta name="keywords" content="английский язык, наиболее употребляемые слова"/>
</head>
<body>
<header>
<?php

echo"<p class='main'>Угадай слово.</p>";
echo "<p class='title'>Освой 2000 английских слов за 40 дней.</p>";
echo "<p class='title2'>Правила просты: дан список слов и подбери ключик к каждому.</p>";

?>

<nav>
<p>
<a href="https://2000plus.ru/">Главная</a>
<a href="https://2000plus.ru/reg.php">Регистрация</a>
<a href="https://2000plus.ru/freeback.php">Обратная связь</a>
<a href="https://2000plus.ru/about.php">Об авторе</a>
</p>



</nav>
</header>
<main>
<?php 
if (@$_REQUEST['OK']){
if (@$_REQUEST['eng1']=="ankle" || @$_REQUEST['eng1']=="Ankle")
	
	{
		echo "<b>1.Лодышка:ankle </b>";
	
		$eng1="ankle+";
	}
	else
	{
		echo "1-Неверно.";
	}
	
	if (@$_REQUEST['eng2']=="arm" || @$_REQUEST['eng2']=="Arm")
	
	{
		echo "<b>2.Arm: рука </b>";
		$eng2="arm+";
	}
	else
	{
		echo "2-Неверно.";
	}
	
	
	if (@$_REQUEST['eng3']=="armpit" || $_REQUEST['eng3']=="Armpit")
	
	{
		echo "<b>3.Подмышка: armpit </b>";
		$eng3="armpit+";
	}
	else
	{
		echo "3-Неверно.";
	}
	if (@$_REQUEST['eng4']=="belly" || @$_REQUEST['eng4']=="Belly")
	
	{
		echo "<b>4.Живот: armpit </b>";
		$eng4="belly+";
	}
	else
	{
		echo "4-Неверно.";
	}
	
	if (@$_REQUEST['eng5']=="bust" || @$_REQUEST['eng5']=="Bust")
	
	{
		echo "<b>5.Женская грудь, бюст: bust </b>";
		$eng5="bust+";
	}
	else
	{
		echo "5-Неверно.";
	}
if (@$_REQUEST['eng6']=="body" || @$_REQUEST['eng6']=="Body")
	
	{
		echo "<b>6.Тело, туловище: body </b>";
		$eng6="body+";
	}
	else
	{
		echo "6-Неверно.";
	}
	
	if (@$_REQUEST['eng7']=="back" || @$_REQUEST['eng7']=="Back")
	
	{
		echo "<b>7.Спина: back </b>";
		$eng7="back+";
	}
	else
	{
		echo "7-Неверно.";
	}
	
}
?>
<br>
Части тела:
1.ankle
2.arm
3.armpit
4.back
5.belly
6.body
7.bust
<form action="index.php" method="post">
<p>
Лодышка:<input type="text" name="eng1" value="<?=@$eng1?>"/>
</p>
<p>
Рука:<input type="text" name="eng2" value="<?=@$eng2?>"/>
</p>
<p>
Подмышка:<input type="text" name="eng3" value="<?=@$eng3?>"/>
</p>
<p>
Живот:<input type="text" name="eng4" value="<?=@$eng4?>"/>
</p>
<p>
Женская грудь, бюст:<input type="text" name="eng5" value="<?=@$eng5?>"/>
</p>
<p>
Тело, туловище:<input type="text" name="eng6" value="<?=@$eng6?>"/>
</p>
<p>
Спина:<input type="text" name="eng7" value="<?=@$eng7?>"/>
<input type="submit" value="Проверить" name="OK"/>
</form>

<?php
if (@$_REQUEST['OK'])
{
if (@$_REQUEST['eng1']=="ankle" || @$_REQUEST['eng1']=="Ankle" && @$_REQUEST['eng2']=="arm" || @$_REQUEST['eng2']=="Arm" && @$_REQUEST['eng3']=="armpit" || @$_REQUEST['eng3']=="Armpit" && @$_REQUEST['eng4']=="belly" || @$_REQUEST['eng4']=="Belly" && @$_REQUEST['eng5']=="bust" || @$_REQUEST['eng5']=="Bust" && @$_REQUEST['eng6']=="body" || @$_REQUEST['eng6']=="Body" && @$_REQUEST['eng7']=="back" || @$_REQUEST['eng7']=="Back" ){
echo "<h2>Ты  жжёшь. Сегодня расслабленный уровень сделан. Можете приходить завтра или продолжить. Не забудьте сохранить в закладках следующую страницу.</h2>";
echo"<a href='/1-2.php'>1 день: 2 урок</a>";
	}	
}
	

?>
</main>
        
<footer>

<p style="background-color:black;color:white">Copyright © 2025 "2000plus.ru". Все права защищены</p>

       <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank"><img id="licnt0BDA" width="88" height="31" style="border:0" 
title="LiveInternet: показано число просмотров и посетителей за 24 часа"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt0BDA").src=
"https://counter.yadro.ru/hit?t52.6;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->



        
        <!-- Top.Mail.Ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3605174", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3605174;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->


<!-- Top.Mail.Ru logo -->
<a href="https://top-fwz1.mail.ru/jump?from=3605174">
<img src="https://top-fwz1.mail.ru/counter?id=3605174;t=479;l=1" height="31" width="88" alt="Top.Mail.Ru" style="border:0;" /></a>
<!-- /Top.Mail.Ru logo -->
</footer>
</body>
</html>