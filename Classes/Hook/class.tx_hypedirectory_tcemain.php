<?php

class tx_hypedirectory_tcemain {

	function processDatamap_postProcessFieldArray($status, $table, $id, &$fields, &$contentObject) {

		if($table == 'tx_hypedirectory_domain_model_contact') {

			# get whole record
			$record = t3lib_BEfunc::getRecord($table, $id);

			# merge changes
			$record = ($record) ? array_merge($record, $fields) : $fields;

			# build label accordingly
			switch($record['type']) {
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
			if($label) {
				$fields['label'] = $label;
			}
		}
	}
}
?>