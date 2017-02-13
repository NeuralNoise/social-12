<?php
/**
*
* acp_social_registration [English]
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
	'SOCIAL_AUTH'				=> 'Social authorization',
	'SOCIAL_AUTH_EXPLAIN'		=> 'Extension phpBB3.1 <a href="http://bb3.mobi">(c) BB3.Mobi</a>',
	'SOCIAL_AUTH_DESCRIPTION'	=> 'Registration and authorization through social networks.',
	'SOCIAL_AUTH_SETTINGS'		=> 'Authorization settings',

	'SOCIAL_POPUP'				=> 'Enable pop-up window',
	'SOCIAL_POPUP_EXPLAIN'		=> 'A pop-up window when you click on the icon of a social network and return to the previous page after login',
	'SOCIAL_ICONS'				=> 'Display icons of social networks',
	'SOCIAL_ICONS_EXPLAIN'		=> 'Icons of social networks will be displayed for users in the topics on the left of the user name.',
	'SOCIAL_APPEND'				=> 'Only authorization',
	'SOCIAL_APPEND_EXPLAIN'		=> 'Prohibition of registration through a social network. Login for registered users only.',
	'SOCIAL_AVATAR'				=> 'Upload avatars',
	'SOCIAL_AVATAR_EXPLAIN'		=> 'If disabled, will be install external avatars.',
	'SOCIAL_SIG'				=> 'Load status in signature',
	'SOCIAL_SIG_EXPLAIN'		=> 'Status of social networks, if available, will be loaded in the signature..',
	'SOCIAL_UPD_USER'			=> 'Update Data on login',
	'SOCIAL_UPD_USER_EXPLAIN'	=> 'Avatars and signatures of the users registered through the social networking site will be updated with the authorization.',
	'SOCIAL_PM_USER'			=> 'Author',
	'SOCIAL_PM_USER_EXPLAIN'	=> 'Id user forum, on behalf of which will be sent a private message.',
	'SOCIAL_PM_SUBJECT'			=> 'Post subject',
	'SOCIAL_PRIVMSG'			=> 'Text private message',
	'SOCIAL_PRIVMSG_EXPLAIN'	=> 'Enter a personal message that will be sent to users after registration through a social network.',
	'SOCIAL_REDIRECT_URI'		=> 'Redirect URI',
	'SOCIAL_REDIRECT_EXPLAIN'	=> 'Provider app',

	'SOCIAL_NUMBER_USERS'		=> 'Users of social networks',
	'SOCIAL_NUMBER_POSTS'		=> 'Messages users of social networks',
	'SOCIAL_NUMBER_USERS_ADD'	=> 'Add accounts',
	'SOCIAL_NUMBER_USERS_ALL'	=> 'The total number of records in the database',
	'SOCIAL_STARTED'			=> 'Start Date',
	'SOCIAL_VERSION'			=> 'Version of extension',

	'SOCIAL_USER_DEL'			=> 'Delete user accounts',
	'SOCIAL_USER_ERR'			=> 'User with <strong>ID: %s</strong>, does not exist or it has no connected accounts.',
	'SOCIAL_USER_UPD'			=> 'Enter the user_id of the user to remove all social accounts',
	'SOCIAL_USER_DELETE'		=> 'Delete Account social networking user <strong>%s</strong>',
	'SOCIAL_USERS_DEL'			=> 'Delete accounts of social networks',
	'SOCIAL_USERS_UPD'			=> 'Disable all linked accounts, registered users',
	'SOCIAL_USERS_DELETE'		=> 'Delete Account social networking online users',
	'SOCIAL_STATISTIC_UPD'		=> 'Reset statistics of social accounts and the number of messages',
	'SOCIAL_STATISTIC_OK'		=> 'Updated statistics of social accounts and the number of messages',

	'ACL_U_SOCIAL_ADD'			=> 'Can add accounts of social networks',

	'SOCIAL_MAILRU'					=> 'Mail.Ru',
	'SOCIAL_MAIL_ENABLE'			=> 'Enable MailRu authorization?',
	'SOCIAL_MAIL_ENABLE_EXPLAIN'	=> 'Before you enable authentication through mail.ru, you should complete the check and store application data.<br /><a href="http://api.mail.ru/sites/my/" target="blank" style="color:red">Connect authorization mail.ru</a>',
	'SOCIAL_MAIL_ID'				=> 'id application MailRu',
	'SOCIAL_MAIL_SECRET'			=> 'Secret key',

	'SOCIAL_YANDEX'						=> 'Yandex',
	'SOCIAL_YANDEX_ENABLE'				=> 'Enable Yandex authorization?',
	'SOCIAL_YANDEX_ENABLE_EXPLAIN'		=> 'Before you enable authentication through Yandex, you should fill in, check and store application data.<br /><a href="https://oauth.yandex.ru/client/new" target="blank" style="color:red">Connect site in Yandex</a>',
	'SOCIAL_YANDEX_ID'					=> 'id application Yandex',
	'SOCIAL_YANDEX_SECRET'				=> 'Secret key',

	'SOCIAL_VKONTAKTE'					=> 'Vk.Com',
	'SOCIAL_VKONTAKTE_ENABLE'			=> 'Enable Vk.Com authorization?',
	'SOCIAL_VKONTAKTE_ENABLE_EXPLAIN'	=> 'Before you enable authentication through Vkontakte, you should fill in, check and store application data.<br /><a href="http://vk.com/editapp?act=create" target="blank" style="color:red">Add your site (application) in vk.com</a>',
	'SOCIAL_VKONTAKTE_ID'				=> 'id app Vkontakte',
	'SOCIAL_VKONTAKTE_SECRET'			=> 'Secret key',

	'SOCIAL_OKRU'						=> 'Ok.Ru',
	'SOCIAL_OKRU_ENABLE'				=> 'Enable authentication through Ok.Ru?',
	'SOCIAL_OKRU_ENABLE_EXPLAIN'		=> 'Before you enable authentication through Ok.Ru, you should fill in, check and store application data.<br /><a href="http://ok.ru/devaccess" target="blank" style="color:red">Register your site in ok.ru</a>',
	'SOCIAL_OKRU_ID'					=> 'id app ok.ru',
	'SOCIAL_OKRU_SECRET'				=> 'Secret key',
	'SOCIAL_OKRU_PUBLIC'				=> 'Publick key',

	'SOCIAL_FACEBOOK'					=> 'Facebook',
	'SOCIAL_FACEBOOK_ENABLE'			=> 'Enable Facebook authorization?',
	'SOCIAL_FACEBOOK_ENABLE_EXPLAIN'	=> 'Before you enable authentication through Facebook, you must create an application and add the site to obtain the necessary keys.<br /><a href="https://developers.facebook.com/apps" target="blank" style="color:red">Add your site in Facebook</a>',
	'SOCIAL_FACEBOOK_ID'				=> 'id app Facebook',
	'SOCIAL_FACEBOOK_SECRET'			=> 'Secret key',

	'SOCIAL_GOOGLE'						=> 'Google',
	'SOCIAL_GOOGLE_ENABLE'				=> 'Enable Google authorization?',
	'SOCIAL_GOOGLE_ENABLE_EXPLAIN'		=> 'Before you enable authentication through Google, you must create an application and add the site to obtain the necessary keys.<br /><a href="https://console.developers.google.com/project" target="blank" style="color:red">Add your site in Google</a>',
	'SOCIAL_GOOGLE_ID'					=> 'id app Google',
	'SOCIAL_GOOGLE_SECRET'				=> 'Secret key',

	'GROUP_EXPLAIN'		=> 'Group which will be installed by default.',
	'REGISTERED'		=> 'Default by',
	'REGISTERED_COPPA'	=> 'Users COPPA',
));

