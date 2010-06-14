<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



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

?>