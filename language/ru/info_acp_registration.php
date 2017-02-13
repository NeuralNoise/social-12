<?php
/**
*
* acp_social_registration [Russian]
*
* @ Name: Social Authorize phpBB
* @ Author: BB3.Mobi .. Anvar [apwa.ru]
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SOCIAL_AUTH'				=> 'Социальная авторизация',
	'SOCIAL_AUTH_EXPLAIN'		=> '<a href="http://bb3.mobi">Soc Auth phpBB3.1</a> (c) BB3.Mobi',
	'SOCIAL_AUTH_DESCRIPTION'	=> 'Регистрация и авторизация через социальные сети.',
	'SOCIAL_AUTH_SETTINGS'		=> 'Основные настройки',

	'SOCIAL_POPUP'				=> 'Включить всплывающее окно',
	'SOCIAL_POPUP_EXPLAIN'		=> 'Всплывающее окно при нажатии на иконку социальной сети и возврата на предыдущую страницу после регистрации',
	'SOCIAL_ICONS'				=> 'Отображение иконки соц сетей',
	'SOCIAL_ICONS_EXPLAIN'		=> 'Иконки социальных сетей будут отображаться у пользователей в темах, слева от имени пользователя.',
	'SOCIAL_APPEND'				=> 'Только авторизация',
	'SOCIAL_APPEND_EXPLAIN'		=> 'Запрет регистрации через социальную сеть. Вход только для зарегистрированных пользователей.',
	'SOCIAL_AVATAR'				=> 'Загружать аватары',
	'SOCIAL_AVATAR_EXPLAIN'		=> 'Аватары будут загружены на сервер. Если выключено, будут установлены внешние аватары.',
	'SOCIAL_SIG'				=> 'Сохранять статусы в подписи',
	'SOCIAL_SIG_EXPLAIN'		=> 'Статусы социальных сетей, если доступны будут загружены в подписи.',
	'SOCIAL_UPD_USER'			=> 'Обновлять данные',
	'SOCIAL_UPD_USER_EXPLAIN'	=> 'Аватары и подписи пользователей, зарегистрированных через социальную сеть будут обновлены при авторизации.',
	'SOCIAL_PM_USER'			=> 'Отправитель',
	'SOCIAL_PM_USER_EXPLAIN'	=> 'id пользователя форума, от имени которого будет отправлено личное сообщение.',
	'SOCIAL_PM_SUBJECT'			=> 'Заголовок сообщения',
	'SOCIAL_PRIVMSG'			=> 'Текст личного сообщения',
	'SOCIAL_PRIVMSG_EXPLAIN'	=> 'Введите текст личного сообщения, который будет отправлен пользователю после регистрации через социальную сеть.',
	'SOCIAL_REDIRECT_URI'		=> 'Redirect URI',
	'SOCIAL_REDIRECT_EXPLAIN'	=> 'Укажите данную ссылку в настройках приложения провайдера, если это требуется.',

	'SOCIAL_NUMBER_USERS'		=> 'Пользователей из соц сетей',
	'SOCIAL_NUMBER_POSTS'		=> 'Сообщений пользователей из соц сетей',
	'SOCIAL_NUMBER_USERS_ADD'	=> 'Подключённых аккаунтов зарегистрированными',
	'SOCIAL_NUMBER_USERS_ALL'	=> 'Общее количество записей в базе',
	'SOCIAL_STARTED'			=> 'Дата запуска',
	'SOCIAL_VERSION'			=> 'Версия расширения',

	'SOCIAL_USER_DEL'			=> 'Удалить аккаунты пользователя',
	'SOCIAL_USER_ERR'			=> 'Пользователя с <strong>ID: %s</strong>, не существует или у него нет подключённых аккаунтов.',
	'SOCIAL_USER_UPD'			=> 'Введите user_id пользователя, которому необходимо удалить все социальные аккаунты',
	'SOCIAL_USER_DELETE'		=> 'Удалены аккаунты социальных сетей у пользователя <strong>%s</strong>',
	'SOCIAL_USERS_DEL'			=> 'Удалить аккаунты соц сетей',
	'SOCIAL_USERS_UPD'			=> 'Отключить все привязанные аккаунты, зарегистрированными пользователями',
	'SOCIAL_USERS_DELETE'		=> 'Удалены аккаунты социальных сетей подключённые пользователями',
	'SOCIAL_STATISTIC_UPD'		=> 'Обновить статистику социальных аккаунтов и количества сообщений',
	'SOCIAL_STATISTIC_OK'		=> 'Обновлена статистика социальных аккаунтов и количества сообщений',

	'ACL_U_SOCIAL_ADD'			=> 'Может подключать аккаунты социальных сетей',

	'SOCIAL_MAILRU'					=> 'Mail.Ru',
	'SOCIAL_MAIL_ENABLE'			=> 'Включить МаилРу авторизацию?',
	'SOCIAL_MAIL_ENABLE_EXPLAIN'	=> 'Прежде чем включить авторизацию через маил.ру, Вам следует заполнить проверить и сохранить данные приложения.<br /><a href="http://api.mail.ru/sites/my/" target="blank" style="color:red">Подключить автризацию маил.ру</a>',
	'SOCIAL_MAIL_ID'				=> 'id приложения МаилРу',
	'SOCIAL_MAIL_SECRET'			=> 'Секретный ключ приложения',

	'SOCIAL_YANDEX'					=> 'Yandex',
	'SOCIAL_YANDEX_ENABLE'				=> 'Включить Yandex авторизацию?',
	'SOCIAL_YANDEX_ENABLE_EXPLAIN'		=> 'Прежде чем включить авторизацию через Yandex, Вам следует заполнить, проверить и сохранить данные приложения.<br /><a href="https://oauth.yandex.ru/client/new" target="blank" style="color:red">Подключить сайт в Yandex</a>',
	'SOCIAL_YANDEX_ID'					=> 'id приложения Yandex',
	'SOCIAL_YANDEX_SECRET'				=> 'Секретный ключ приложения',

	'SOCIAL_VKONTAKTE'					=> 'Вконтакте',
	'SOCIAL_VKONTAKTE_ENABLE'			=> 'Включить Vkontakte авторизацию?',
	'SOCIAL_VKONTAKTE_ENABLE_EXPLAIN'	=> 'Прежде чем включить авторизацию через Vkontakte, Вам следует заполнить, проверить и сохранить данные приложения.<br /><a href="http://vk.com/editapp?act=create" target="blank" style="color:red">Добавить сайт(приложение) в vk.com</a>',
	'SOCIAL_VKONTAKTE_ID'				=> 'id приложения Vkontakte',
	'SOCIAL_VKONTAKTE_SECRET'			=> 'Секретный ключ приложения',

	'SOCIAL_OKRU'						=> 'Одноклассники',
	'SOCIAL_OKRU_ENABLE'				=> 'Включить авторизацию через одноклассники?',
	'SOCIAL_OKRU_ENABLE_EXPLAIN'		=> 'Прежде чем включить авторизацию через Одноклассники, Вам следует заполнить, проверить и сохранить данные приложения.<br /><a href="http://ok.ru/devaccess" target="blank" style="color:red">Зарегистрировать сайт в ok.ru</a>',
	'SOCIAL_OKRU_ID'					=> 'id приложения Одноклассников',
	'SOCIAL_OKRU_SECRET'				=> 'Секретный ключ приложения',
	'SOCIAL_OKRU_PUBLIC'				=> 'Публичный ключ приложения',

	'SOCIAL_FACEBOOK'					=> 'Facebook',
	'SOCIAL_FACEBOOK_ENABLE'			=> 'Включить Facebook авторизацию?',
	'SOCIAL_FACEBOOK_ENABLE_EXPLAIN'	=> 'Прежде чем включить авторизацию через Facebook, следует создать приложение и добавить сайт, получить необходимые ключи.<br /><a href="https://developers.facebook.com/apps" target="blank" style="color:red">Добавить сайт в Facebook</a>',
	'SOCIAL_FACEBOOK_ID'				=> 'id приложения Facebook',
	'SOCIAL_FACEBOOK_SECRET'			=> 'Секретный ключ приложения',

	'SOCIAL_GOOGLE'						=> 'Google',
	'SOCIAL_GOOGLE_ENABLE'				=> 'Включить Google авторизацию?',
	'SOCIAL_GOOGLE_ENABLE_EXPLAIN'		=> 'Прежде чем включить авторизацию через Google, следует создать приложение и добавить сайт, получить необходимые ключи.<br /><a href="https://console.developers.google.com/project" target="blank" style="color:red">Добавить сайт в Google</a>',
	'SOCIAL_GOOGLE_ID'					=> 'id приложения Google',
	'SOCIAL_GOOGLE_SECRET'				=> 'Секретный ключ приложения',

	'GROUP_EXPLAIN'		=> 'Группа которая будет установлена по умолчанию.',
	'REGISTERED'		=> 'По умолчанию',
	'REGISTERED_COPPA'	=> 'Пользователи COPPA',
));
