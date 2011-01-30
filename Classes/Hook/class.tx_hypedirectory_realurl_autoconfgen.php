<?php

class tx_hypedirectory_realurl_autoconfgen {
	public function addRealURLConfig($parameters, $object) {

		# get realurl config
		$config = $parameters['config'];

		$postVars = array(
			'hype_directory' => array(
				array(
					'GETvar' => 'tx_hypedirectory_contact[controller]',
					'noMatch' => 'bypass'
				),
				array(
					'GETvar' => 'tx_hypedirectory_contact[action]',
					'noMatch' => 'bypass'
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