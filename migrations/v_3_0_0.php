<?php
/**
*
* @package Social Authorization in phpBB
* @copyright bb3.mobi 2014 (c) Anvar (http://apwa.ru)
* @license COMMERCIAL
*
*/

namespace bb3mobi\social\migrations;

class v_3_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['social_version']) && version_compare($this->config['social_version'], '3.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v312');
	}

	public function update_schema()
	{
		return array(
		'add_tables' => array(
				$this->table_prefix . 'soc_users' => array(
					'COLUMNS'		=> array(
						'id'						=> array('UINT:11', NULL, 'auto_increment'),
						'user_id'					=> array('UINT', 0),
						'user_soc_id'				=> array('STEXT_UNI', 0),
						'user_soc_provider'			=> array('STEXT_UNI', NULL),
						'user_soc_token'			=> array('STEXT_UNI', ''),
						'user_soc_nikname'			=> array('STEXT_UNI', ''),
						'user_soc_last_name'		=> array('STEXT_UNI', ''),
						'user_soc_first_name'		=> array('STEXT_UNI', ''),
						'user_soc_email'			=> array('STEXT_UNI', ''),
						'user_soc_birthday'			=> array('VCHAR:10', ''),
						'user_soc_avatar'			=> array('STEXT_UNI', ''),
						'user_soc_avatar_width'		=> array('USINT', 0),
						'user_soc_avatar_height'	=> array('USINT', 0),
						'user_soc_link'				=> array('TEXT', ''),
						'user_soc_type'				=> array('BOOL', 0),
					),
					'PRIMARY_KEY'	=> 'id',
					'KEYS'			=> array(
						'user_id'		=> array('INDEX', 'user_id'),
						'user_soc_id'	=> array('INDEX', 'user_soc_id'),
					),
				),
			),
		);
	}

	/*public function revert_schema()
	{
		return array(
			'drop_tables'	=> array($this->table_prefix . 'soc_users'),
		);
	}*/

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('social_popup', 1)),
			array('config.add', array('social_icons', 1)),
			array('config.add', array('social_append', 0)),
			array('config.add', array('social_avatar', 0)),
			array('config.add', array('social_signature', 0)),
			array('config.add', array('social_upd_user', 0)),
			array('config.add', array('social_pm_user', 2)),
			array('config.add', array('social_pm_subject', 'Welcome to bb3.mobi!')),
			array('config.add', array('social_privmsg', '')),
			array('config.add', array('social_num_user', 0)),
			array('config.add', array('social_num_user_post', 0)),
			array('config.add', array('social_num_user_add', 0)),
			array('config.add', array('social_start_date', time() - 1)),

			// Add configs
			array('config.add', array('mailru_config', '')),
			array('config.add', array('mailru_id', '')),
			array('config.add', array('mailru_secret', '')),
			array('config.add', array('mailru_group', '')),

			array('config.add', array('yandex_config', '')),
			array('config.add', array('yandex_id', '')),
			array('config.add', array('yandex_secret', '')),
			array('config.add', array('yandex_group', '')),

			array('config.add', array('vkontakte_config', '')),
			array('config.add', array('vkontakte_id', '')),
			array('config.add', array('vkontakte_secret', '')),
			array('config.add', array('vkontakte_group', '')),

			array('config.add', array('okru_config', '')),
			array('config.add', array('okru_id', '')),
			array('config.add', array('okru_secret', '')),
			array('config.add', array('okru_public', '')),
			array('config.add', array('okru_group', '')),

			array('config.add', array('facebook_config', '')),
			array('config.add', array('facebook_id', '')),
			array('config.add', array('facebook_secret', '')),
			array('config.add', array('facebook_group', '')),

			array('config.add', array('google_config', '')),
			array('config.add', array('google_id', '')),
			array('config.add', array('google_secret', '')),
			array('config.add', array('google_group', '')),

			array('config.add', array('social_version', '3.0.0')),

			// Add permissions
			array('permission.add', array('u_social_add', true)),
			// Set permissions
			array('permission.permission_set', array('ROLE_USER_NOPM', 'u_social_add', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_social_add', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_NEW_MEMBER', 'u_social_add', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_LIMITED', 'u_social_add', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_social_add', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_social_add', 'role', true)),

			// UCP module
			array('module.add', array('ucp', 'UCP_PROFILE', array(
				'module_basename'	=> '\bb3mobi\social\ucp\social_module',
				'module_langname'	=> 'SOC_UCP_TITLE',
				'module_mode'		=> 'config_social',
				'module_auth'		=> 'ext_bb3mobi/social && acl_u_social_add',
			))),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'SOCIAL_AUTH')),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_AUTH_SETTINGS',
				'module_mode'		=> 'config_social',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			// Add ACP modules
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_MAILRU',
				'module_mode'		=> 'mailru',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_YANDEX',
				'module_mode'		=> 'yandex',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_VKONTAKTE',
				'module_mode'		=> 'vkontakte',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_OKRU',
				'module_mode'		=> 'okru',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_FACEBOOK',
				'module_mode'		=> 'facebook',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.add', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_GOOGLE',
				'module_mode'		=> 'google',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
		);
	}

	public function revert_data()
	{
		return array(
			// remove from UCP modules
			array('module.remove', array('ucp', 'UCP_PROFILE', array(
				'module_basename'	=> '\bb3mobi\social\ucp\social_module',
				'module_langname'	=> 'SOC_UCP_TITLE',
				'module_mode'		=> 'config_social',
				'module_auth'		=> 'ext_bb3mobi/social && acl_u_social_add',
			))),

			// remove from ACP modules
			array('module.remove', array('acp', 'ACP_CAT_DOT_MODS', 'SOCIAL_AUTH')),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_AUTH_SETTINGS',
				'module_mode'		=> 'config_social',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_MAILRU',
				'module_mode'		=> 'mailru',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_YANDEX',
				'module_mode'		=> 'yandex',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_VKONTAKTE',
				'module_mode'		=> 'vkontakte',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_OKRU',
				'module_mode'		=> 'okru',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_FACEBOOK',
				'module_mode'		=> 'facebook',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'SOCIAL_AUTH', array(
				'module_basename'	=> '\bb3mobi\social\acp\social_module',
				'module_langname'	=> 'SOCIAL_GOOGLE',
				'module_mode'		=> 'google',
				'module_auth'		=> 'ext_bb3mobi/social && acl_a_board',
			))),
		);
	}
}
