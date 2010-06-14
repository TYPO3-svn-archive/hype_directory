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
		'label'	 => 'last_name',
		'label_alt' => 'first_name',
		'label_alt_force' => TRUE,
		//'label_userFunc' => 'tx_hypestore_tca_label->getCategory',
		'tstamp'	=> 'tstamp',
		'crdate'	=> 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'			=> 'sys_language_uid',
		'transOrigPointerField'	=> 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		//'sortby' => 'sorting',
		'default_sortby' => 'last_name, first_name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/contact.icon.png',
		
		'dividers2tabs' => TRUE,
		'thumbnail' => 'images',
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
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/register.icon.png',
		
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
		'iconfile'		=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Configuration/TCA/Icons/role.icon.png',
		
		'dividers2tabs' => TRUE,
		'hideTable' => TRUE,
	),
);


# Web module list
if(TYPO3_MODE == 'BE') {
	
	# Contact
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_hypedirectory_domain_model_contact'][0] = array(
		'fList' => 'last_name,first_name;middle_name,telephone;cellphone,email',
		'icon' => TRUE,
	);
	
	# Register
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_hypedirectory_domain_model_register'][0] = array(
		'fList' => 'name',
		'icon' => TRUE,
	);
	
	# Role
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_hypedirectory_domain_model_role'][0] = array(
		'fList' => 'title,contact',
		'icon' => TRUE,
	);
}

?>