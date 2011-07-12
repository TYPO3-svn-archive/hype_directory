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
	'version' => '0.1.3',
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
			'typo3' => '4.5.0-4.5.99',
			'extbase' => '1.3.0-1.3.99',
			'fluid' => '1.3.0-1.3.99',
			'hype' => '0.3.5-0.0.0',
			'static_info_tables' => '0.0.0-0.0.0',
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