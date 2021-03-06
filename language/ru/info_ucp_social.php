<?php
/**
*
* info_ucp_social [Russian]
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
	'UCP_SOCIAL'		=> 'Социальные аккаунты',
	'SOC_UCP_TITLE'		=> 'Мои аккаунты',
	'SOC_UCP_EXPLAYN'	=> 'Вы можете подключить и обновить данные своих социальных аккаунтов, в последующем использовать их для входа на форум без ввода имени пользователя и пароля, используя для этого специальные иконки социальных сетей.',
	'SOC_UCP_ADDS'		=> 'Список подключённых аккаунтов',
	'SOC_UCP_NO_ADDS'	=> 'Не подключён ни один аккаунт',
	'SOC_UCP_BASE'		=> 'Основной',

	'SOC_MESSAGE_ADD'	=> 'Аккаунт успешно привязан!',
	'SOC_MESSAGE_DEL'	=> 'Данные аккаунта удалены из базы данных!',
	'SOC_MESSAGE_UPD'	=> 'Данные аккаунта обновлены!',
	'SOC_MESSAGE_ERR'	=> 'Непредвиденная ошибка!',
	'SOC_MESSAGE_OFF'	=> 'Не выйдет, данная возможность отключена!',
	'SOC_MESSAGE_REP'	=> 'Как бы не так, этот аккаунт является основным и он подключён к другому пользователю: <strong>%s</strong>.<br />Возможно это ваш ещё один аккаунт на форуме. Обратитесь к администрации для разрешения ситуации.',
	'SOC_MESSAGE_VAL'	=> '<b>Необходимо указать или изменить дополнительные данные:</b>',
	'SOC_MESSAGE_PASS'	=> 'Укажите пароль от учётной записи зарегистрированной на форуме и войдите с подключённым аккаунтом социальной сети.',
	'SOC_MESSAGE_ACC'	=> 'Не получены данные аккаунта <strong>%s</strong>',
	'SOC_MESSAGE_TOKEN'	=> 'Не получен токен.',
	'SOC_MESSAGE_REG'	=> 'Авторизация доступна только зарегистрированным пользователям, с подключёнными аккаунтами социальных сетей.',
	'SOC_MESSAGE_MAIL'	=> 'Источник регистрации: %s, Вы можете заходить на форум как используя указанные выше логин и пароль, так и через ваш социальный аккаунт.',
));
