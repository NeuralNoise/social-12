<?php
/**
*
* info_ucp_social [English]
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
	'UCP_SOCIAL'		=> 'Social accounts',
	'SOC_UCP_TITLE'		=> 'My Accounts',
	'SOC_UCP_EXPLAYN'	=> 'You can connect and update their social accounts, subsequently use them to enter without entering a username and password, but under your profile on the forum by clicking on the icon you connected social networking accounts.',
	'SOC_UCP_ADDS'		=> 'List of connected accounts',
	'SOC_UCP_NO_ADDS'	=> 'Not connected no account',
	'SOC_UCP_BASE'		=> 'Main',

	'SOC_MESSAGE_ADD'	=> 'Account is successfully attached!',
	'SOC_MESSAGE_DEL'	=> 'Account information removed from the database!',
	'SOC_MESSAGE_UPD'	=> 'Account information updated!',
	'SOC_MESSAGE_ERR'	=> 'Unexpected Error!',
	'SOC_MESSAGE_OFF'	=> 'Sorry, this feature is disabled!',
	'SOC_MESSAGE_REP'	=> 'Sorry, this account is basic and it is connected to another user: <strong>%s</strong>.<br />Perhaps this is your another account on the forum. Refer to the administration to resolve the situation.',
	'SOC_MESSAGE_VAL'	=> 'You want to enter additional data specified in error.',
	'SOC_MESSAGE_PASS'	=> 'Enter the password of an account registered on the forum and sign in with the connected account social network.',
	'SOC_MESSAGE_ACC'	=> 'No data received account <strong>%s</strong>',
	'SOC_MESSAGE_TOKEN'	=> 'Do not get a token.',
	'SOC_MESSAGE_REG'	=> 'Authorization is only available to registered users, connected with social networking accounts.',
	'SOC_MESSAGE_MAIL'	=> 'Source registration: %s, You can go to the forum as using the above username and password, as well as through your social account.',
));
