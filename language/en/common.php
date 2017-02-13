<?php
/**
*
* common.php [English]
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
	'SOC_AUTHORIZE'		=> 'Social login',
	'SOC_AUTH_EXPLAIN'	=> 'You can log in through a social network',
	'SOC_AUTH_COPY'		=> '<div class="copyright">Anvar BB3.Mobi &copy; <a href="http://bb3.mobi/forum/viewtopic.php?t=64">Social Authorize phpBB</a></div>',
	'SOC_AUTH_REDIRECT'	=> 'Forwarding will be done through the website <strong>%s</strong> for authorization.<br />After a few seconds you will return to the user rights.<br />Click here to go to continue.',
	'SOC_AUTH_ARY'		=> array(
		'mailru'	=> 'Mail.Ru',
		'yandex'	=> 'Yandex',
		'vkontakte'	=> 'Vk.Com',
		'okru'		=> 'Ok.Ru',
		'facebook'	=> 'Facebook',
		'google'	=> 'Google',
	),
));
