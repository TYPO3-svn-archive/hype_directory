<?php

class tx_hypedirectory_tcemain {
	
	function processDatamap_postProcessFieldArray($status, $table, $id, &$fields, &$contentObject) {
		
		if($table == 'tx_hypedirectory_domain_model_contact') {
			
			# get whole record
			$record = t3lib_BEfunc::getRecord($table, $id);
			
			# determine correct type
			$type = ($fields['type']) ? $fields['type'] : $record['type'];
			
			# build label accordingly
			switch($type) {
				case 'person':
					$label = implode(' ', array_filter(array($record['last_name'], $record['first_name'])));
					break;
				
				case 'corporation':
					$label = $record['corporate_name'];
					break;
				
				default:
					$label = NULL;
					break;
			}
			
			# assign label
			$fields['label'] = $label;
		}
	}
}
?>