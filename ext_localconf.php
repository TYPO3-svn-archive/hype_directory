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

# TCE Main
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:hype_directory/Classes/Hook/class.tx_hypedirectory_tcemain.php:tx_hypedirectory_tcemain';

?>