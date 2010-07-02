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
	'description' => 'Provides a basic system for storing contact data. Use registers to group specific contacts and even apply dedicated roles to them.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.1.2',
	'dependencies' => 'extbase,fluid,hype',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/hype/directory/contact/images/',
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
			'typo3' => '4.4.0-4.4.99',
			'extbase' => '1.2.0-0.0.0',
			'fluid' => '1.2.0-0.0.0',
			'hype' => '0.3.2-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
	'suggests' => array(
	),
);

?>