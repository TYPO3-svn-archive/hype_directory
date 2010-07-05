<?php

class tx_hypedirectory_cmslayout {
	
	/**
	* Function called from page view, used to generate preview of this plugin
	*
	* @param array $parameters
	* @param array $layout
	* @return string
	*/
	public function getPluginPreview($parameters, &$layout) {
		
		# exit on wrong content type
		if($parameters['row']['CType'] != 'list') {
			return;
		}
		
		# set content
		$content = '';
		
		# set list type
		$type = $parameters['row']['list_type'];
		$form = t3lib_div::xml2array($parameters['row']['pi_flexform']);
		
		switch($type) {
			case 'hypedirectory_register':
				
				# get registers
				$registers = explode(',', $form['data']['sDEF']['lDEF']['settings.view.register.uid']['vDEF']);
				
				$names = array();
				foreach($registers as $register) {
					$record = t3lib_BEfunc::getRecord('tx_hypedirectory_domain_model_register', $register);
					if(is_array($record)) {
						array_push($names, $record['name']);
					}
				}
				
				if(count($names) > 0) {
					$content .= 'Registers: ' . implode(', ', $names);
				}
				
				break;
			
			case 'hypedirectory_contact':
				
				break;
		}
		
		if(strlen($content) == 0) {
			$content = ' ';
		}
		
		return $content;
	}
} 

?>