<?php

class tx_hypedirectory_cmslayout {

	/**
	* Function called on object instantiation
	*
	* @return void
	*/
	public function __construct() {
		$GLOBALS['LANG']->includeLLFile('EXT:hype_directory/Resources/Private/Language/locallang_db.xml');
	}

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
				$uids = explode(',', $form['data']['sDEF']['lDEF']['settings.view.register.uid']['vDEF']);

				$names = array();
				foreach($uids as $uid) {
					$register = t3lib_BEfunc::getRecord('tx_hypedirectory_domain_model_register', $uid);
					if(is_array($register)) {
						array_push($names, $register['name']);
					}
				}

				if(count($names) > 0) {
					$content .= $GLOBALS['LANG']->getLL('tx_hypedirectory.flexform.registers') . ': ' . implode(', ', $names);
				}

				break;

			case 'hypedirectory_contact':

				# get contact
				$uid = $form['data']['sDEF']['lDEF']['settings.view.contact.uid']['vDEF'];

				if($uid) {
					$contact = t3lib_BEfunc::getRecord('tx_hypedirectory_domain_model_contact', $uid);
					$content .= $GLOBALS['LANG']->getLL('tx_hypedirectory.flexform.contact') . ': ' . $contact['label'];
				}

				break;
		}

		return $content;
	}
}

?>