<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# Directory plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Directory',
	array('Directory' => 'index'),
	array('Directory' => '')
);

?>