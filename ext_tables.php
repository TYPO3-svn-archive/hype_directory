<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# add default setup & constants
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Hype Directory');



# PLUGINS

# Register
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Register', 'Hype Directory, Register');

# Contact
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Contact', 'Hype Directory, Contact');



# FLEXFORMS

# Register
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['hypedirectory_register'] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['hypedirectory_register'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue('hypedirectory_register', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/register.flexform.xml');

# Contact
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['hypedirectory_contact'] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['hypedirectory_contact'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue('hypedirectory_contact', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/contact.flexform.xml');



# TABLES

# Contact
t3lib_extMgm::allowTableOnStandardPages('tx_hypedirectory_domain_model_contact');
$TCA['tx_hypedirectory_domain_model_contact'] = array(
	'ctrl' => array(
		'title'	 => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_contact',
		'label'	 => 'label',
		//'label_alt' => 'first_name',
		//'label_alt_force' => TRUE,
		//'label_userFunc' => 'tx_hypestore_tca_label->getCategory',
		'tstamp'	=> 'tstamp',
		'crdate'	=> 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'			=> 'sys_language_uid',
		'transOrigPointerField'	=> 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		//'sortby' => 'sorting',
		'default_sortby' => 'label',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/contact.png',
		
		'dividers2tabs' => TRUE,
		'thumbnail' => 'images',
		'type'					=> 'type',
		'typeicon_column'		=> 'type',
		'typeicons' => array(
			'person' => '../typo3conf/ext/hype_directory/Configuration/TCA/Icons/Contact/person.png',
			'corporation' => '../typo3conf/ext/hype_directory/Configuration/TCA/Icons/Contact/corporation.png',
		),
	),
);

# Register
t3lib_extMgm::allowTableOnStandardPages('tx_hypedirectory_domain_model_register');
$TCA['tx_hypedirectory_domain_model_register'] = array(
	'ctrl' => array(
		'title'	 => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_register',
		'label'	 => 'name',
		//'label_alt' => 'title',
		//'label_alt_force' => TRUE,
		'tstamp'	=> 'tstamp',
		'crdate'	=> 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'			=> 'sys_language_uid',
		'transOrigPointerField'	=> 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		//'sortby' => 'sorting',
		'default_sortby' => 'name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/register.png',
		
		'dividers2tabs' => TRUE,
		'thumbnail' => 'images',
	),
);

# Role
t3lib_extMgm::allowTableOnStandardPages('tx_hypedirectory_domain_model_role');
$TCA['tx_hypedirectory_domain_model_role'] = array(
	'ctrl' => array(
		'title'	 => 'LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:tx_hypedirectory_domain_model_role',
		'label'	 => 'title',
		'label_alt' => 'register',
		//'label_alt_force' => TRUE,
		'tstamp'	=> 'tstamp',
		'crdate'	=> 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'			=> 'sys_language_uid',
		'transOrigPointerField'	=> 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		//'sortby' => 'sorting',
		'default_sortby' => 'title',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/role.png',
		
		'dividers2tabs' => TRUE,
		'hideTable' => TRUE,
	),
);

# Frontend User
$columns = array(
	'tx_hypedirectory_domain_model_addresses' => array(
		'exclude' => 1,
		'label' => "LLL:EXT:hype_directory/Resources/Private/Language/locallang_db.xml:fe_users.tx_hypestore_domain_model_addresses",
		'config' => array(
			'type'						=> 'inline',
			'foreign_table'				=> 'tx_hypedirectory_domain_model_contact',
			'foreign_field'				=> 'frontend_user',
			'foreign_label'				=> 'city',
			'foreign_default_sortby'	=> 'city',
			'appearance'				=> array(
				'collapseAll'				=> TRUE,
				'expandSingle'				=> TRUE,
			),
			'minitems'					=> 0,
			'maxitems'					=> 999999,
		),
	),
);

t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users', $columns, 1);
t3lib_extMgm::addToAllTCAtypes('fe_users', '--div--;Addresses,tx_hypedirectory_domain_model_addresses', '', 'after:image');

?>