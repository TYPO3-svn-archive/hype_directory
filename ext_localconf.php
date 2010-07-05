<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# PLUGINS

# Register plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Register',
	array('Register' => 'index'),
	array('Register' => '')
);

# Contact plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Contact',
	array('Contact' => 'index'),
	array('Contact' => '')
);



# HOOKS
if(TYPO3_MODE == 'BE') {
	
	# TCE Main
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_tcemain.php:tx_hypedirectory_tcemain';
	
	# CMS Layout
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['hypedirectory_register'][] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_cmslayout.php:tx_hypedirectory_cmslayout->getPluginPreview';
}

if(TYPO3_MODE == 'FE') {
	
	# RealUrl
	//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$_EXTKEY] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_realurl_autoconfgen.php:&tx_hypedirectory_realurl_autoconfgen->addRealURLConfig';
}

?>