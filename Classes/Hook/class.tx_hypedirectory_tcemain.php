<?php

class tx_hypedirectory_tcemain {

	/**
	 * @var array
	 */
	protected $record;

	/**
	 * @var string
	 */
	protected $status;

	/**
	 * @var string
	 */
	protected $table;

	/**
	 * @var integer
	 */
	protected $uid;

	/**
	 *
	 *
	 */
	public function __construct() {

		# load localization
		$GLOBALS['LANG']->includeLLfile(t3lib_extMgm::extPath('hype_directory') . 'Resources/Private/Language/locallang_db.php');
	}

	/**
	 *
	 *
	 */
	public function processDatamap_postProcessFieldArray($status, $table, $uid, &$fields, &$content) {

		# initiate defaults
		$this->initiate($status, $table, $uid, &$fields, &$content);

		switch($table) {

			case 'tx_hypedirectory_domain_model_contact':

				# label
				$this->getContactLabel(&$fields, &$content);

				# geodata
				$this->getContactGeodata(&$fields, &$content);

				break;
		}
	}

	/**
	 *
	 *
	 */
	protected function initiate($status, $table, $uid, &$fields, &$content) {

		# set status
		$this->status = $status;

		# set table
		$this->table = $table;

		# set uid
		$this->uid = $uid;

		# get record
		$this->record = t3lib_BEfunc::getRecord($table, $uid);
	}

	/**
	 *
	 *
	 */
	protected function getContactLabel(&$fields, &$content) {

		# merge record
		$record = ($this->record) ? array_merge($this->record, $fields) : $fields;

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

	/**
	 *
	 *
	 */
	protected function getContactGeodata(&$fields, &$content) {

		# get currect fields
		$actualAddressParts = ($this->record)
			? array_filter(array(
				'street' => $this->record['street'],
				'postal_code' => $this->record['postal_code'],
				'city' => $this->record['city'],
				'country' => $this->record['country'],
				'state' => $this->record['state'],
			))
			: array();

		# get changed fields
		$changedAddressParts = array_intersect_key(
			$fields,
			array(
				'street' => TRUE,
				'postal_code' => TRUE,
				'city' => TRUE,
				'country' => TRUE,
				'state' => TRUE
			)
		);

		# get calculated fields
		$calculatedAddressParts = array_filter(array_merge($actualAddressParts, $changedAddressParts));

		# perform geocoding
		if(count($changedAddressParts) > 0 && count($calculatedAddressParts) > 0) {

			# get the address parts
			$addressParts = array();

			# base address
			array_push($addressParts, $calculatedAddressParts['street']);
			array_push($addressParts, $calculatedAddressParts['postal_code']);
			array_push($addressParts, $calculatedAddressParts['city']);

			# get country
			if($calculatedAddressParts['country']) {
				$country = t3lib_BEfunc::getRecord('static_countries', $calculatedAddressParts['country']);
				array_push($addressParts, $country['cn_short_en']);
			}

			# get state
			if($calculatedAddressParts['state']) {
				$state = t3lib_BEfunc::getRecord('static_country_zones', $calculatedAddressParts['state']);
				array_push($addressParts, $state['zn_name_local']);
			}

			# prepare address parts
			$addressParts = array_filter($addressParts);

			# build address string
			$addressString = implode(', ', $addressParts);

			# retrieve geodata
			$streamContext = stream_context_create(array('http' => array('timeout' => 3)));
			$geodata = @file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . urlencode($addressString) . '&sensor=false');

			if($geodata) {
				$geodata = json_decode($geodata);
			} else {
				$geodata = new stdClass;
				$geoData->status = 'INVALID_REQUEST';
			}

			switch($geodata->status) {

				# geodata found
				case 'OK':

					# save coordinates
					$latitude = $geodata->results[0]->geometry->location->lat;
					$longitude = $geodata->results[0]->geometry->location->lng;

					switch($geodata->results[0]->geometry->location_type) {

						case 'ROOFTOP':
						case 'RANGE_INTERPOLATED':

							$messageType = t3lib_FlashMessage::OK;
							$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-exact.title');
							$messageBody = sprintf($GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-exact.body'), $addressString);

							break;

						default:

							$messageType = t3lib_FlashMessage::INFO;
							$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-approximate.title');
							$messageBody = sprintf($GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-approximate.body'), $addressString);

							break;
					}

					break;

				# no geodata found
				case 'ZERO_RESULTS':

					$messageType = t3lib_FlashMessage::WARNING;
					$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-none.title');
					$messageBody = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-none.body');

					$latitude = 0;
					$longitude = 0;

					break;

				# query limit reached
				case 'OVER_QUERY_LIMIT':

					$messageType = t3lib_FlashMessage::ERROR;
					$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-limit.title');
					$messageBody = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-limit.body');

					$latitude = 0;
					$longitude = 0;

					break;

				# query error
				default:
				case 'REQUEST_DENIED':
				case 'INVALID_REQUEST':

					$messageType = t3lib_FlashMessage::ERROR;
					$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-error.title');
					$messageBody = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-error.body');

					$latitude = 0;
					$longitude = 0;

					break;
			}

			# finally populate the fields
			$fields['latitude'] = number_format($latitude, 7, '.', '');
			$fields['longitude'] = number_format($longitude, 7, '.', '');

			# set a cute flash message
			$message = t3lib_div::makeInstance('t3lib_FlashMessage', $messageBody, $messageTitle, $messageType);
			t3lib_FlashMessageQueue::addMessage($message);

		} else if(count($changedAddressParts) > 0 && count($calculatedAddressParts) == 0) {

			# reset coordinates
			$fields['latitude'] = number_format(0, 7, '.', '');
			$fields['longitude'] = number_format(0, 7, '.', '');

			# set a cute flash message
			$messageType = t3lib_FlashMessage::INFO;
			$messageTitle = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-reset.title');
			$messageBody = $GLOBALS['LANG']->getLL('tx_hypedirectory.message.geolocation-reset.body');

			$message = t3lib_div::makeInstance('t3lib_FlashMessage',$messageBody, $messageTitle, $messageType);
			t3lib_FlashMessageQueue::addMessage($message);
		}
	}
}
?>