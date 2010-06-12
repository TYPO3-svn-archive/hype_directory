<?php

########################################################################
# Extension Manager/Repository config file for ext "hype_directory".
#
# Auto generated 11-06-2010 01:54
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Hype Directory',
	'description' => 'Provides a basic system for storing contact data.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/hype/directory/contact/images',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Thomas "Thasmo" Deinhamer',
	'author_email' => 'thasmo@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.dev-4.3.99',
			'extbase' => '1.0.1-0.0.0',
			'fluid' => '1.0.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:12:"ext_icon.gif";s:4:"7300";s:17:"ext_localconf.php";s:4:"a224";s:14:"ext_tables.php";s:4:"b897";s:14:"ext_tables.sql";s:4:"ee85";s:46:"Configuration/FlexForms/directory.flexform.xml";s:4:"a5ec";s:25:"Configuration/TCA/tca.php";s:4:"098f";s:40:"Configuration/TCA/Icons/contact.icon.png";s:4:"1518";s:38:"Configuration/TCA/Icons/group.icon.png";s:4:"3afb";s:37:"Configuration/TCA/Icons/role.icon.png";s:4:"4fb4";s:38:"Configuration/TypoScript/constants.txt";s:4:"40dd";s:34:"Configuration/TypoScript/setup.txt";s:4:"afb9";s:40:"Resources/Private/Language/locallang.xml";s:4:"e9a0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"eb39";}',
	'suggests' => array(
	),
);

?>