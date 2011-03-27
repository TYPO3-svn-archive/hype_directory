<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# PLUGINS

# Contact plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Contact',
	array('Contact' => 'index,record'),
	array('Contact' => '')
);

# Register plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Register',
	array('Register' => 'index,record'),
	array('Register' => '')
);



# HOOKS

# Backend
if(TYPO3_MODE == 'BE') {

	# TCE Main
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_tcemain.php:tx_hypedirectory_tcemain';

	# CMS Layout
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['hypedirectory_register'][] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_cmslayout.php:tx_hypedirectory_cmslayout->getPluginPreview';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['hypedirectory_contact'][] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_cmslayout.php:tx_hypedirectory_cmslayout->getPluginPreview';
}

# Frontend
if(TYPO3_MODE == 'FE') {

	# RealUrl
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$_EXTKEY] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_realurl_autoconfgen.php:&tx_hypedirectory_realurl_autoconfgen->addRealURLConfig';
}



# FUNCTIONS

# TCA Fields
class user_hype_directory_TCA {
	public function map($PA, $fobj) {
		$url = 'http://maps.google.com/maps?q=' . urlencode($PA['row']['latitude']) . ',' . urlencode($PA['row']['longitude']) . '&output=embed';
		return '<iframe style="display: block; height: 300px !important; width: 95% !important;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' . $url . '"></iframe>';
	}
}

?>