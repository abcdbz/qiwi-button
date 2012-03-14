<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
<title></title>
<link rel="stylesheet" href="qiwiframestyle.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3.1"></script>
<script>
$(document).ready(function() {
			
$("#form").submit(function() {
      $("#container").hide("fast");

	  $("#qiwiframe").show("fast");

    });
});
</script>
</head>
<body>
<div id="container">
<div class="top">
	<img src="http://w.qiwi.ru/img/ui/logo.png">
</div>
<div class="center">
<div class="wrapper">
<div class="base">
<div class="content">
<div class="phone">
<form name="phone_form" id="form" method="post" action="https://w.qiwi.ru/setInetBill_utf.do" target="QIWIiframe">
 
	<div>
	<table class="billing_info">
	<tr>
		<td class="Left" style="vertical-align: middle;">
			<input class="phone_input" type="tel" name="to" placeholder="Номер телефона" pattern="[0-9]{10}" autofocus required>
		</td>
		<td class="Right" style="text-align:center;">
			<input class="phone_submit_button" type="submit" value="Подтвердить">
		</td>
	</tr>
	<tr>
		<td><p id="phone_example">Пример: 9211234567</p></td>
		<td>&nbsp;</td>
<?php
	$url= $_GET['url'];
	$from = $_GET['from'];
	$summ = $_GET['summ'];
	$com = $_GET['com'];
	$lifetime = $_GET['lifetime'];
	$check_agt = $_GET['check_agt'];
	$iframe = $_GET['iframe'];
	
	echo '
	</tr>
	<tr class="hiden">
		<td><input name="from" value="'.$from.'"></td>
		<td><input name="summ" value="'.$summ.'"></td>
	</tr>
	<tr class="hiden">
		<td>&nbsp;</td>
		<td><input name="lifetime" value="'.$lifetime.'"></td>
	</tr>
	<tr class="hiden">
		<td><input name="check_agt" value="'.$check_agt.'"></td>
		<td><input name="iframe" value="'.$iframe.'"></td>
	</tr>
	</table>
	</div>
	<div class="comment">
	<textarea name="com" cols="38" rows="4" placeholder="Комментарий" required>'.$com.'</textarea>
	</div>
</form>
<p class="description_payment">
	Введите свой номер телефона  форму ввыше.<br /><b>Будьте внимательны может взиматься коммисия.</b>
</p>'
?>
</div>
</div>
</div>
</div>
</div>
</div>
 <iframe id="qiwiframe" name="QIWIiframe" frameborder="0">Ваш браузер не поддерживает плавающие фреймы</iframe>
</body>
</html>
