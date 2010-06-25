<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# Contact
$TCA['tx_hypedirectory_domain_model_contact'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_contact']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, starttime, endtime ,fe_group, type, form_of_address, academic_title, first_name, middle_name, last_name, nickname, corporate_name, images, gender, date_of_birth, street, postal_code, city, stair, floor, door, state, country, telephone, cellphone, fax, email, website, remark, related_page, related_address, frontend_user, backend_user'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_contact']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'				=> 'select',
				'foreign_table'		=> 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0),
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'	=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'		=> 'tx_hypedirectory_domain_model_contact',
				'foreign_table_where' => 'AND tx_hypedirectory_domain_model_contact.pid=###CURRENT_PID### AND tx_hypedirectory_domain_model_contact.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => '0'
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'	=> '20',
				'eval'	=> 'date',
				'default'	=> '0',
				'checkbox' => '0'
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'	=> '20',
				'eval'	=> 'date',
				'checkbox' => '0',
				'default'	=> '0',
				'range'	=> array(
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y')),
				),
			),
		),
		'fe_group' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'	=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'foreign_table' => 'fe_groups'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.type',
			'config' => array(
				'type' => 'select',
				'default' => 'person',
				'items' => array(
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.type.person', 'person', 'EXT:hype_directory/Configuration/TCA/Icons/Contact/person.png'),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.type.corporation', 'corporation', 'EXT:hype_directory/Configuration/TCA/Icons/Contact/corporation.png'),
				),
			),
		),
		'form_of_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.form_of_address',
			'config' => array(
				'type' => 'select',
				'size' => 1,
				'items' => array(
					array('', 0),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.form_of_address.mister', 1),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.form_of_address.misses', 2),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.form_of_address.family', 3),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.form_of_address.company', 4),
				),
			),
		),
		'academic_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.academic_title',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'first_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.first_name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'middle_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.middle_name',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'eval' => 'trim',
			),
		),
		'last_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.last_name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'nickname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.nickname',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'eval' => 'trim',
			),
		),
		'corporate_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.corporate_name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'images' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.images',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => 10240,
				'uploadfolder' => 'uploads/hype/directory/contact/images/',
				'size' => 1,
				'maxitems' => 1,
				'show_thumbs' => TRUE,
			),
		),
		'gender' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.gender',
			'config' => array(
				'type' => 'select',
				'size' => 1,
				'items' => array(
					array('', 0),			 
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.gender.female', 1),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.gender.male', 2),
				),
			),
		),
		'date_of_birth' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.date_of_birth',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'eval' => 'trim,date',
			),
		),
		'street' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.street',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'postal_code' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.postal_code',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'eval' => 'trim',
			),
		),
		'city' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.city',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'stair' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.stair',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'eval' => 'trim',
			),
		),
		'floor' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.floor',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'eval' => 'trim',
			),
		),
		'door' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.door',
			'config' => array(
				'type' => 'input',
				'size' => '5',
				'eval' => 'trim',
			),
		),
		'state' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.state',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'eval' => 'trim',
			),
		),
		'country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.country',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.telephone',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'cellphone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.cellphone',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'fax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.fax',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.email',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'wizards'  => array(
					'link'	 => array(
						'type'		 => 'popup',
						'title'		=> 'E-Mail',
						'icon'		 => 'link_popup.gif',
						'script'	   => 'browse_links.php?mode=wizard&act=mail',
						'JSopenParams' => 'height=320,width=800,status=0,menubar=0,scrollbars=1'
					),
				),
			),
		),
		'website' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.website',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'wizards'  => array(
					'link'	 => array(
						'type'		 => 'popup',
						'title'		=> 'Website',
						'icon'		 => 'link_popup.gif',
						'script'	   => 'browse_links.php?mode=wizard&act=url',
						'JSopenParams' => 'height=320,width=800,status=0,menubar=0,scrollbars=1'
					),
				),
			),
		),
		'remark' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.remark',
			'config' => array(
				'type' => 'text',
			),
		),
		'roles' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.roles',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_hypedirectory_domain_model_role',
				//'foreign_table_where' => 'AND tx_hypedirectory_domain_model_category.uid != ###THIS_UID###',
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 999999,
				'MM' => 'tx_hypedirectory_relation_contact_role',
				'MM_opposite_field' => 'contact',
			),
		),
		'registers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.registers',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_hypedirectory_domain_model_register',
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 999999,
				'MM' => 'tx_hypedirectory_relation_register_contact',
				'MM_opposite_field' => 'contacts',
			),
		),
		'related_page' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.related_page',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'pages',
				'size' => 1,
				'maxitems' => 1,
			),
		),
		'related_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.related_address',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'wizards'  => array(
					'link'	 => array(
						'type'		 => 'popup',
						'title'		=> 'Related address',
						'icon'		 => 'link_popup.gif',
						'script'	   => 'browse_links.php?mode=wizard&act=url',
						'JSopenParams' => 'height=320,width=800,status=0,menubar=0,scrollbars=1'
					),
				),
			),
		),					   
		'frontend_user' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.frontend_user',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'fe_users',
				'size' => 1,
				'maxitems' => 1,
			),
		),
		'backend_user' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.backend_user',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'be_users',
				'size' => 1,
				'maxitems' => 1,
			),
		),
	),
	'types' => array(
		'person' => array('showitem' => '
			sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, type;;;;1-1-1, form_of_address;;;;1-1-1, academic_title, first_name;;2;;1-1-1, last_name, images;;;;1-1-1, gender;;;;1-1-1, date_of_birth;;;;1-1-1, remark;;;;1-1-1,
			
			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tabs.contact,
				street;;3;;, postal_code, city, country;;4;;, telephone;;;;1-1-1, cellphone, fax, email;;;;1-1-1, website,
			
			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tabs.relations,
				related_page, related_address, frontend_user;;;;1-1-1, backend_user
		'),
		'corporation' => array('showitem' => '
			sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, type;;;;1-1-1, corporate_name;;;;1-1-1, remark;;;;1-1-1,
			
			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tabs.contact,
				street;;3;;, postal_code, city, country;;4;;, telephone;;;;1-1-1, cellphone, fax, email;;;;1-1-1, website,
			
			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tabs.relations,
				related_page, related_address
		'),
	),
	'palettes' => array(
		'1' => array('showitem' => 'starttime, endtime, fe_group'),
		'2' => array('showitem' => 'middle_name, nickname'),
		'3' => array('showitem' => 'stair, floor, door'),
		'4' => array('showitem' => 'state'),
	),
);

# Register
$TCA['tx_hypedirectory_domain_model_register'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_register']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,name,contacts,roles'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_register']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'				=> 'select',
				'foreign_table'		=> 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0),
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'		=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'		=> 'tx_hypedirectory_domain_model_register',
				'foreign_table_where' => 'AND tx_hypedirectory_domain_model_register.pid=###CURRENT_PID### AND tx_hypedirectory_domain_model_register.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => '0'
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'		=> '20',
				'eval'	=> 'date',
				'default'	=> '0',
				'checkbox' => '0'
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'		=> '20',
				'eval'	=> 'date',
				'checkbox' => '0',
				'default'	=> '0',
				'range'	=> array(
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y')),
				),
			),
		),
		'fe_group' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'	=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'foreign_table' => 'fe_groups'
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register.name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'required,trim',
			),
		),
		'contacts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register.contacts',
			'config' => array(
				'type'						=> 'select',
				'foreign_table'				=> 'tx_hypedirectory_domain_model_contact',
				'foreign_table_where'		=> 'AND type = \'person\' ORDER BY last_name ASC, first_name ASC',
				'MM'						=> 'tx_hypedirectory_relation_register_contact',
				'MM_opposite_field'			=> 'registers',
				'size'						=> 10,
				'autoSizeMax'				=> 20,
				'minitems'					=> 0,
				'maxitems'					=> 999999,
			),
		),
		'roles' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register.roles',
			'config' => array(
				'type'						=> 'inline',
				'foreign_table'				=> 'tx_hypedirectory_domain_model_role',
				'foreign_field'				=> 'register',
				'foreign_label'				=> 'title',
				'foreign_sortby'			=> 'sorting',
				//'MM'						=> 'tx_hypedirectory_relation_register_role',
				'minitems'					=> 0,
				'maxitems'					=> 999999,
				'appearance'		=> array(
					'collapseAll'		=> TRUE,
					'expandSingle'		=> TRUE,
				),
			),
		),
	),
	'types' => array(
		0 => array('showitem' => '
			sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name;;;;1-1-1, contacts;;;;1-1-1,
			
			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tabs.roles,
				roles;;;;1-1-1
		'),
	),
	'palettes' => array(
		'1' => array('showitem' => 'starttime, endtime, fe_group'),
	),
);

# Role
$TCA['tx_hypedirectory_domain_model_role'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_role']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,title,additional_title,contacts,register'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_role']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'				=> 'select',
				'foreign_table'		=> 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0),
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'		=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'		=> 'tx_hypedirectory_domain_model_role',
				'foreign_table_where' => 'AND tx_hypedirectory_domain_model_role.pid=###CURRENT_PID### AND tx_hypedirectory_domain_model_role.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => '0'
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'		=> '20',
				'eval'	=> 'date',
				'default'	=> '0',
				'checkbox' => '0'
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> '8',
				'max'		=> '20',
				'eval'	=> 'date',
				'checkbox' => '0',
				'default'	=> '0',
				'range'	=> array(
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y')),
				),
			),
		),
		'fe_group' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'	=> array(
				'type'	=> 'select',
				'items' => array(
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'foreign_table' => 'fe_groups'
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.title',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'required,trim',
			),
		),
		'additional_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.additional_title',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'contacts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.contacts',
			'config' => array(
				'type'						=> 'select',
				'foreign_table'				=> 'tx_hypedirectory_domain_model_contact',
				'foreign_table_where'		=> 'AND type = \'person\' ORDER BY last_name ASC, first_name ASC',
				'MM'						=> 'tx_hypedirectory_relation_contact_role',
				'MM_opposite_field'			=> 'roles',
				'size'						=> 10,
				'autoSizeMax'				=> 20,
				'minitems'					=> 1,
				'maxitems'					=> 999999,
			),
		),
		'register' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.register',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_hypedirectory_domain_model_register',
				'size' => 1,
				'minItems' => 1,
				'maxItems' => 1,
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => '
			hidden, title;;;;1-1-1, additional_title, contacts;;;;1-1-1, register
		'),
	),
	'palettes' => array(
		'1' => array('showitem' => 'starttime, endtime, fe_group'),
	),
);
?>