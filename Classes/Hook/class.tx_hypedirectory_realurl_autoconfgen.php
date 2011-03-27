<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class tx_hypedirectory_realurl_autoconfgen {
	public function addRealURLConfig($parameters, $object) {

		# get realurl config
		$config = $parameters['config'];

		$postVars = array(
			'directory-contact' => array(
				array(
					'GETvar' => 'tx_hypedirectory_contact[controller]',
				),
				array(
					'GETvar' => 'tx_hypedirectory_contact[contact]',
					'lookUpTable' => array(
						'table'               => 'tx_hypedirectory_domain_model_contact',
						'id_field'            => 'uid',
						'alias_field'         => 'label',
						'addWhereClause'      => ' AND NOT deleted',
						'useUniqueCache'      => 1,
						'useUniqueCache_conf' => array(
							'strtolower'     => 1,
							'spaceCharacter' => '-',
						),
					),
				),
				array(
					'GETvar' => 'tx_hypedirectory_contact[role]',
					'lookUpTable' => array(
						'table'               => 'tx_hypedirectory_domain_model_role',
						'id_field'            => 'uid',
						'alias_field'         => 'title',
						'addWhereClause'      => ' AND NOT deleted',
						'useUniqueCache'      => 1,
						'useUniqueCache_conf' => array(
							'strtolower'     => 1,
							'spaceCharacter' => '-',
						),
					),
				),
				array(
					'GETvar' => 'tx_hypedirectory_contact[action]',
					'valueMap' => array(
						'_dummy_' => '_dummy_',
					),
					'noMatch' => 'null',
				),
			),
		);

		if(!is_array($config['postVarSets']['_DEFAULT'])) {
			$config['postVarSets']['_DEFAULT'] = $postVars;
		} else {
			$config['postVarSets']['_DEFAULT'] = array_merge($config['postVarSets']['_DEFAULT'], $postVars);
		}

		return $config;
	}
}

?>