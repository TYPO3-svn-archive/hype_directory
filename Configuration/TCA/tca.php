<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# Contact
$TCA['tx_hypedirectory_domain_model_contact'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_contact']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, type, label, display_name, form_of_address, academic_title, first_name, middle_name, last_name, nickname, initials, maiden_name, corporate_name, images, gender, date_of_birth, place_of_birth, date_of_death, place_of_death, marital_status, nationality, mother_tongue, date_of_formation, date_of_closure, street, postal_code, city, stair, floor, door, state, country, latitude, longitude, telephone_number, telephone_country, telephone_area_code, telephone_extension, fax_number, fax_country, fax_area_code, fax_extension, cellphone_number, cellphone_country, cellphone_area_code, email, website, remark, related_page, related_address, frontend_user, backend_user, hidden, starttime, endtime, fe_group, editlock'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_contact']['feInterface'],
	'columns' => array(
		'pid' => array(
			'type' => 'passthrough'
		),
		'deleted' => array(
			'type' => 'passthrough'
		),
		'sorting' => array(
			'type' => 'passthrough'
		),
		'tstamp' => array(
			'type' => 'passthrough'
		),
		'crdate' => array(
			'type' => 'passthrough'
		),
		'cruser_id' => array(
			'type' => 'select',
			'foreign_table' => 'be_users',
		),

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
		'label' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.label',
			'config' => array(
				'type' => 'none',
				'size' => 20,
			),
			'displayCond' => 'FIELD:label:REQ:true',
		),
		'display_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.display_name',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
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
				),
			),
		),
		'academic_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.academic_title',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
			),
		),
		'first_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'middle_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.middle_name',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'last_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'required, trim',
			),
		),
		'nickname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.nickname',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'initials' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.initials',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'maiden_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.maiden_name',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'corporate_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.corporate_name',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'required, trim',
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
				'size' => 6,
				'eval' => 'trim, date',
			),
		),
		'place_of_birth' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.place_of_birth',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
			),
		),
		'date_of_death' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.date_of_death',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'trim, date',
			),
		),
		'place_of_death' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.place_of_death',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
			),
		),
		'marital_status' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status',
			'config' => array(
				'type' => 'select',
				'size' => 1,
				'items' => array(
					array('', 0),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.single', 1),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.married', 2),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.divorced', 3),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.widowed', 4),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.separated', 5),
					array('LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.marital_status.unknown', 99),
				),
			),
		),
		'nationality' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.nationality',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'mother_tongue' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.mother_tongue',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_languages',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'date_of_formation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.date_of_formation',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'trim, date',
			),
		),
		'date_of_closure' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.date_of_closure',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'trim, date',
			),
		),
		'street' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.street',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
			),
		),
		'postal_code' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.postal_code',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num',
			),
		),
		'city' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.city',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim',
			),
		),
		'stair' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.stair',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim',
			),
		),
		'floor' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.floor',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim',
			),
		),
		'door' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.door',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim',
			),
		),
		'country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.country',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'latitude' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.latitude',
			'config' => array(
				'type' => 'none',
				'size' => 8,
			),
			'displayCond' => 'FIELD:latitude:!IN:0.0000000,',
		),
		'longitude' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.longitude',
			'config' => array(
				'type' => 'none',
				'size' => 8,
			),
			'displayCond' => 'FIELD:longitude:!IN:0.0000000,',
		),
		'map' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.map',
			'config' => array(
				'type' => 'user',
				'userFunc' => 'user_hype_directory_TCA->map',
			),
			'displayCond' => 'FIELD:latitude:!IN:0.0000000,',
		),
		'state' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.state',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_country_zones',
					//'where' => 'static_country_zones.zn_country_iso_2 = ###REC_FIELD_country###',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'telephone_number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.telephone_number',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'trim, alphanum, nospace',
			),
		),
		'telephone_country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.telephone_country',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'telephone_area_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.telephone_area_code',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num, nospace',
			),
		),
		'telephone_extension' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.telephone_extension',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num, nospace',
			),
		),
		'fax_number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.fax_number',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'trim, alphanum, nospace',
			),
		),
		'fax_country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.fax_country',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'fax_area_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.fax_area_code',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num, nospace',
			),
		),
		'fax_extension' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.fax_extension',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num, nospace',
			),
		),
		'cellphone_number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.cellphone_number',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'trim, alphanum ,nospace',
			),
		),
		'cellphone_country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.cellphone_country',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array (
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => TYPO3_MODE,
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
		),
		'cellphone_area_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.cellphone_area_code',
			'config' => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'trim, num, nospace',
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.email',
			'config' => array(
				'type' => 'input',
				'size' => 20,
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
				'size' => 20,
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
				'type'						=> 'inline',
				'foreign_table'				=> 'tx_hypedirectory_domain_model_register',
				'foreign_field'				=> 'contact',
				'foreign_label'				=> 'title',
				'foreign_sortby'			=> 'sorting',
				'MM'						=> 'tx_hypedirectory_relation_register_contact',
				'minitems'					=> 0,
				'maxitems'					=> 999999,
				'appearance'		=> array(
					'collapseAll'		=> TRUE,
					'expandSingle'		=> TRUE,
				),
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
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1,
						),
					),
				),
			),
		),
		'related_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact.related_address',
			'config' => array(
				'type' => 'input',
				'size' => 20,
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
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1,
						),
					),
				),
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
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1,
						),
					),
				),
			),
		),
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => 0,
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> 8,
				'max'	=> 20,
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
				'size'	=> 8,
				'max'	=> 20,
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
				'size' => 5,
				'maxitems' => 99,
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'exclusiveKeys' => '-1,-2',
				'foreign_table' => 'fe_groups'
			),
		),
		'editlock' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_tca.xml:editlock',
			'config' => array(
				'type' => 'check'
			),
		),
	),
	'types' => array(
		'person' => array('showitem' => '
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.contact;general,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.display;label,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.affix;affix,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.name;name,
				--palette--;;name_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.images;images,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.details,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.details;details,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.remark;remark,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.contact,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.address;address,
				--palette--;;address_addition,
				map,
				--palette--;;location,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.telephone_number;telephone,
				--palette--;;telephone_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.fax_number;fax,
				--palette--;;fax_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.cellphone_number;cellphone,
				--palette--;;cellphone_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.email;email,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.website;website,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.relations,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.pages;pages,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.users;users,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.access,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.access;access,
		'),
		'corporation' => array('showitem' => '
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.contact;general,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.display;label,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.name;corporate_name,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.images;images,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.details,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.details;corporate_details,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.remark;remark,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.contact,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.address;address,
				--palette--;;address_addition,
				map,
				--palette--;;location,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.telephone_number;telephone,
				--palette--;;telephone_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.fax_number;fax,
				--palette--;;fax_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.cellphone_number;cellphone,
				--palette--;;cellphone_addition,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.email,email,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.website,website,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.relations,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.contacts;contacts,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.pages;pages,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.users;users,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.access,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.access;access,
		'),
	),
	'palettes' => array(
		'general' => array(
			'showitem' => 'type, sys_language_uid',
			'canNotCollapse' => TRUE,
		),
		'label' => array(
			'showitem' => 'label, --linebreak--, display_name',
			'canNotCollapse' => TRUE,
		),
		'affix' => array(
			'showitem' => 'form_of_address, academic_title',
			'canNotCollapse' => TRUE,
		),
		'name' => array(
			'showitem' => 'first_name, last_name, middle_name',
			'canNotCollapse' => TRUE,
		),
		'name_addition' => array(
			'showitem' => 'nickname, initials, maiden_name',
		),
		'corporate_name' => array(
			'showitem' => 'corporate_name',
			'canNotCollapse' => TRUE,
		),
		'images'=> array(
			'showitem' => 'images',
			'canNotCollapse' => TRUE,
		),
		'remark'=> array(
			'showitem' => 'remark',
			'canNotCollapse' => TRUE,
		),
		'details'=> array(
			'showitem' => 'gender, marital_status, --linebreak--, date_of_birth, place_of_birth, --linebreak--, date_of_death, place_of_death, --linebreak--, nationality, --linebreak--, mother_tongue',
			'canNotCollapse' => TRUE,
		),
		'corporate_details' => array(
			'showitem' => 'date_of_formation, --linebreak--, date_of_closure',
			'canNotCollapse' => TRUE,
		),
		'address' => array(
			'showitem' => 'street, --linebreak--, stair, floor, door, --linebreak--, postal_code, city',
			'canNotCollapse' => TRUE,
		),
		'address_addition' => array(
			'showitem' => 'country, state',
		),
		'location' => array(
			'showitem' => 'latitude, longitude',
		),
		'telephone' => array(
			'showitem' => 'telephone_area_code, telephone_number, telephone_extension',
			'canNotCollapse' => TRUE,
		),
		'telephone_addition' => array(
			'showitem' => 'telephone_country',
		),
		'fax' => array(
			'showitem' => 'fax_area_code, fax_number, fax_extension',
			'canNotCollapse' => TRUE,
		),
		'fax_addition' => array(
			'showitem' => 'fax_country',
		),
		'cellphone' => array(
			'showitem' => 'cellphone_area_code, cellphone_number',
			'canNotCollapse' => TRUE,
		),
		'cellphone_addition' => array(
			'showitem' => 'cellphone_country',
		),
		'email' => array(
			'showitem' => 'email',
			'canNotCollapse' => TRUE,
		),
		'website' => array(
			'showitem' => 'website',
			'canNotCollapse' => TRUE,
		),
		'contacts' => array(
			'showitem' => 'roles, --linebreak--, registers',
			'canNotCollapse' => TRUE,
		),
		'pages' => array(
			'showitem' => 'related_page, --linebreak--, related_address',
			'canNotCollapse' => TRUE,
		),
		'users' => array(
			'showitem' => 'frontend_user, --linebreak--, backend_user,',
			'canNotCollapse' => TRUE,
		),
		'access' => array(
			'showitem' => 'starttime, endtime, hidden, --linebreak--, fe_group, --linebreak--, editlock',
			'canNotCollapse' => TRUE,
		),
	),
);

# Register
$TCA['tx_hypedirectory_domain_model_register'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_register']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, name, contacts, roles, hidden, starttime, endtime, fe_group, editlock'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_register']['feInterface'],
	'columns' => array(
		'pid' => array(
			'type' => 'passthrough'
		),
		'deleted' => array(
			'type' => 'passthrough'
		),
		'sorting' => array(
			'type' => 'passthrough'
		),
		'tstamp' => array(
			'type' => 'passthrough'
		),
		'crdate' => array(
			'type' => 'passthrough'
		),
		'cruser_id' => array(
			'type' => 'select',
			'foreign_table' => 'be_users',
		),

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
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register.name',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'required, trim',
			),
		),
		'contacts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register.contacts',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_hypedirectory_domain_model_contact',
				'foreign_table' => 'tx_hypedirectory_domain_model_contact',
				'MM' => 'tx_hypedirectory_relation_register_contact',
				'MM_opposite_field' => 'registers',
				'size' => 3,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 999999,
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1,
						),
					),
				),
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
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => 0,
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> 8,
				'max'		=> 20,
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
				'size'	=> 8,
				'max'		=> 20,
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
				'size' => 5,
				'maxitems' => 99,
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'exclusiveKeys' => '-1,-2',
				'foreign_table' => 'fe_groups'
			),
		),
		'editlock' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_tca.xml:editlock',
			'config' => array(
				'type' => 'check'
			),
		),
	),
	'types' => array(
		0 => array('showitem' => '
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.register;general,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.name;name,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.contacts;contacts,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.roles,
				roles,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.access,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.access;access,
		'),
	),
	'palettes' => array(
		'general' => array(
			'showitem' => 'sys_language_uid',
			'canNotCollapse' => TRUE,
		),
		'name' => array(
			'showitem' => 'name',
			'canNotCollapse' => TRUE,
		),
		'contacts' => array(
			'showitem' => 'contacts',
			'canNotCollapse' => TRUE,
		),
		'access' => array(
			'showitem' => 'starttime, endtime, hidden, --linebreak--, fe_group, --linebreak--, editlock',
			'canNotCollapse' => TRUE,
		),
	),
);

# Role
$TCA['tx_hypedirectory_domain_model_role'] = array(
	'ctrl' => $TCA['tx_hypedirectory_domain_model_role']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, title, additional_title, contacts ,register, hidden, starttime, endtime, fe_group, editlock'
	),
	'feInterface' => $TCA['tx_hypedirectory_domain_model_role']['feInterface'],
	'columns' => array(
		'pid' => array(
			'type' => 'passthrough'
		),
		'deleted' => array(
			'type' => 'passthrough'
		),
		'sorting' => array(
			'type' => 'passthrough'
		),
		'tstamp' => array(
			'type' => 'passthrough'
		),
		'crdate' => array(
			'type' => 'passthrough'
		),
		'cruser_id' => array(
			'type' => 'select',
			'foreign_table' => 'be_users',
		),

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
				'foreign_table' => 'tx_hypedirectory_domain_model_role',
				'foreign_table_where' => 'AND tx_hypedirectory_domain_model_role.pid=###CURRENT_PID### AND tx_hypedirectory_domain_model_role.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.title',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'required, trim',
			),
		),
		'additional_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.additional_title',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
			),
		),
		'contacts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role.contacts',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_hypedirectory_domain_model_contact',
				'foreign_table' => 'tx_hypedirectory_domain_model_contact',
				'MM' => 'tx_hypedirectory_relation_contact_role',
				'MM_opposite_field' => 'roles',
				'size' => 3,
				'autoSizeMax' => 20,
				'minitems' => 1,
				'maxitems' => 999999,
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1,
						),
					),
				),
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
		'hidden' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
				'default' => 0,
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label'	=> 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'	=> array(
				'type'	=> 'input',
				'size'	=> 8,
				'max'		=> 20,
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
				'size'	=> 8,
				'max'		=> 20,
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
				'size' => 5,
				'maxitems' => 99,
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'),
				),
				'exclusiveKeys' => '-1,-2',
				'foreign_table' => 'fe_groups'
			),
		),
		'editlock' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_tca.xml:editlock',
			'config' => array(
				'type' => 'check'
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => '
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.role;general,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.title;title,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.contacts;contacts,

			--div--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.tab.access,
				--palette--;LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory.palette.access;access,
		'),
	),
	'palettes' => array(
		'general' => array(
			'showitem' => 'register, sys_language_uid',
			'canNotCollapse' => TRUE,
		),
		'title' => array(
			'showitem' => 'title, --linebreak--, additional_title',
			'canNotCollapse' => TRUE,
		),
		'contacts' => array(
			'showitem' => 'contacts',
			'canNotCollapse' => TRUE,
		),
		'access' => array(
			'showitem' => 'starttime, endtime, hidden, --linebreak--, fe_group, --linebreak--, editlock',
			'canNotCollapse' => TRUE,
		),
	),
);
?>