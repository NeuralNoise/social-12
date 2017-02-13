<?php
/**
*
* common.php [Russian]
*
* @ Name: Social Authorize phpBB
* @ Author: BB3.Mobi .. Anvar [apwa.ru]
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SOC_AUTHORIZE'		=> 'Войти через социальную сеть',
	'SOC_AUTH_EXPLAIN'	=> 'Быстрая регистрация и авторизация через социальную сеть &reg;',
	'SOC_AUTH_COPY'		=> '<div class="copyright"><a href="http://bb3.mobi/forum/viewtopic.php?t=64">Авторизация через соц сети</a> &copy; Anvar BB3.Mobi</div>',
	'SOC_AUTH_REDIRECT'	=> 'Будет произведена переадресация через сайт <strong>%s</strong> для авторизации.<br />Уже через несколько секунд вы вернётесь с правами пользователя.<br />Нажмите перейти для продолжения.',
	'SOC_AUTH_ARY'		=> array(
		'mailru'	=> 'Mail.Ru',
		'yandex'	=> 'Яндекс',
		'vkontakte'	=> 'Вконтакте',
		'okru'		=> 'Одноклассники',
		'facebook'	=> 'Facebook',
		'google'	=> 'Google',
	),
));
