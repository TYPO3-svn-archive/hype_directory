<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
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

/**
 * Contact
 *
 * @package HypeDirectory
 * @subpackage Domain\Model
 * @version $Id$
 * @scope prototype
 * @entity
 */
class Tx_HypeDirectory_Domain_Model_Contact extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $pid;
	
	/**
	 * @var DateTime
	 */
	protected $modificationDate;
	
	/**
	 * @var DateTime
	 */
	protected $creationDate;
	
	/**
	 * @var Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	//protected $creationUser;
	
	/**
	 * @var integer
	 */
	protected $language;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $sorting;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $deleted;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $hidden;
	
	/**
	 * @var DateTime
	 */
	protected $startTime;
	
	/**
	 * @var DateTime
	 */
	protected $endTime;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Hype_Domain_Model_Typo3_FrontendUsergroup>
	 * @lazy
	 */
	protected $frontendUsergroups;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $type;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $label;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $street;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $postalCode;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $city;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $stair;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $floor;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $door;
	
	/**
	 * @var Tx_Hype_Domain_Model_StaticCountryZone
	 */
	protected $state;
	
	/**
	 * @var Tx_Hype_Domain_Model_StaticCountry
	 */
	protected $country;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $telephoneNumber;
	
	/**
	 * @var Tx_Hype_Domain_Model_StaticCountry
	 */
	protected $telephoneCountry;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $telephoneAreaCode;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $telephoneExtension;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $faxNumber;
	
	/**
	 * @var Tx_Hype_Domain_Model_StaticCountry
	 */
	protected $faxCountry;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $faxAreaCode;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $faxExtension;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $cellphoneNumber;
	
	/**
	 * @var Tx_Hype_Domain_Model_StaticCountry
	 */
	protected $cellphoneCountry;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $cellphoneAreaCode;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $email;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $website;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $remark;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $relatedPage;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $relatedAddress;
	
	/**
	 * Getter for pid
	 *
	 * @return integer
	 */
	public function getPid() {
		return $this->pid;
	}
	
	/**
	 * Setter for pid
	 *
	 * @param integer $pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}
	
	/**
	 * Getter for modificationDate
	 *
	 * @return DateTime
	 */
	public function getModificationDate() {
		return $this->modificationDate;
	}
	
	/**
	 * Setter for modificationDate
	 *
	 * @param DateTime $modificationDate
	 * @return void
	 */
	public function setModificationDate(DateTime $modificationDate) {
		$this->modificationDate = $modificationDate;
	}
	
	/**
	 * Getter for creationDate
	 *
	 * @return DateTime
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}
	
	/**
	 * Setter for creationDate
	 *
	 * @param DateTime $creationDate
	 * @return void
	 */
	public function setCreationDate(DateTime $creationDate) {
		$this->creationDate = $creationDate;
	}
	
	/**
	 * Getter for creationUser
	 *
	 * @return Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	public function getCreationUser() {
		return $this->creationUser;
	}
	
	/**
	 * Setter for creationUser
	 *
	 * @param Tx_Hype_Domain_Model_Typo3_BackendUser $creationUser
	 * @return void
	 */
	public function setCreationUser(Tx_Hype_Domain_Model_Typo3_BackendUser $creationUser) {
		$this->creationUser = $creationUser;
	}
	
	/**
	 * Getter for language
	 *
	 * @return integer
	 */
	public function getLanguage() {
		return $this->language;
	}
	
	/**
	 * Setter for language
	 *
	 * @param integer $language
	 * @return void
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	/**
	 * Getter for sorting
	 *
	 * @return integer
	 */
	public function getSorting() {
		return $this->sorting;
	}
	
	/**
	 * Setter for sorting
	 *
	 * @param integer $sorting
	 * @return void
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;
	}
	
	/**
	 * Getter for deleted
	 *
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}
	
	/**
	 * Setter for deleted
	 *
	 * @param boolean $deleted
	 * @return void
	 */
	public function setDeleted($deleted) {
		$this->deleted = $deleted;
	}
	
	/**
	 * Getter for hidden
	 *
	 * @return boolean
	 */
	public function getHidden() {
		return $this->hidden;
	}
	
	/**
	 * Setter for hidden
	 *
	 * @param boolean $hidden
	 * @return void
	 */
	public function setHidden($hidden) {
		$this->hidden = $hidden;
	}
	
	/**
	 * Getter for startTime
	 *
	 * @return DateTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}
	
	/**
	 * Setter for startTime
	 *
	 * @param DateTime $startTime
	 * @return void
	 */
	public function setStartTime(DateTime $startTime) {
		$this->startTime = $startTime;
	}
	
	/**
	 * Getter for endTime
	 *
	 * @return DateTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}
	
	/**
	 * Setter for endTime
	 *
	 * @param DateTime $endTime
	 * @return void
	 */
	public function setEndTime(DateTime $endTime) {
		$this->endTime = $endTime;
	}
	
	/**
	 * Setter for frontendUsergroups
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $frontendUsergroups
	 * @return void
	 */
	public function setFrontendUsergroups(Tx_Extbase_Persistence_ObjectStorage $frontendUsergroups) {
		$this->frontendUsergroups = clone $frontendUsergroups;
	}
	
	/**
	 * Adds a frontendUsergroup
	 *
	 * @param Tx_Hype_Domain_Model_Typo3_FrontendUsergroup $frontendUsergroup
	 * @return void
	 */
	public function addFrontendUsergroup(Tx_Hype_Domain_Model_Typo3_FrontendUsergroup $frontendUsergroup) {
		$this->contacts->attach($frontendUsergroup);
	}
	
	/**
	 * Removes a frontendUsergroup
	 *
	 * @param Tx_Hype_Domain_Model_Typo3_FrontendUsergroup $frontendUsergroup
	 * @return void
	 */
	public function removeFrontendUsergroup(Tx_Hype_Domain_Model_Typo3_FrontendUsergroup $frontendUsergroup) {
		$this->contacts->detach($frontendUsergroup);
	}
	
	/**
	 * Remove all frontendUsergroups
	 *
	 * @return void
	 */
	public function removeFrontendUsergroups() {
		$this->contacts = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Getter for frontendUsergroups
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getFrontendUsergroups() {
		if($this->frontendUsergroups instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->frontendUsergroups->_loadRealInstance();
		}
		
		return clone $this->frontendUsergroups;
	}
	
	/**
	 * Getter for type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for type
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * Getter for label
	 *
	 * @return string
	 */
	public function getLabel() {
		return $this->label;
	}
	
	/**
	 * Setter for label
	 *
	 * @param string $label
	 * @return void
	 */
	public function setLabel($label) {
		$this->label = $label;
	}
	
	/**
	 * Getter for street
	 *
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}
	
	/**
	 * Setter for street
	 *
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}
	
	/**
	 * Getter for city
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * Setter for city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}
	
	/**
	 * Getter for stair
	 *
	 * @return string
	 */
	public function getStair() {
		return $this->stair;
	}
	
	/**
	 * Setter for stair
	 *
	 * @param string $stair
	 * @return void
	 */
	public function setStair($stair) {
		$this->stair = $stair;
	}
	
	/**
	 * Getter for floor
	 *
	 * @return string
	 */
	public function getFloor() {
		return $this->floor;
	}
	
	/**
	 * Setter for floor
	 *
	 * @param string $floor
	 * @return void
	 */
	public function setFloor($floor) {
		$this->floor = $floor;
	}
	
	/**
	 * Getter for door
	 *
	 * @return string
	 */
	public function getDoor() {
		return $this->door;
	}
	
	/**
	 * Setter for door
	 *
	 * @param string $door
	 * @return void
	 */
	public function setDoor($door) {
		$this->door = $door;
	}
	
	/**
	 * Getter for postalCode
	 *
	 * @return string
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}
	
	/**
	 * Setter for postalCode
	 *
	 * @param string $postalCode
	 * @return void
	 */
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}
	
	/**
	 * Getter for state
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountryZone
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * Setter for state
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountryZone $state
	 * @return void
	 */
	public function setState(Tx_Hype_Domain_Model_StaticCountryZone $state) {
		$this->state = $state;
	}
	
	/**
	 * Getter for country
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountry
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * Setter for country
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountry $country
	 * @return void
	 */
	public function setCountry(Tx_Hype_Domain_Model_StaticCountry $country) {
		$this->country = $country;
	}
	
	/**
	 * Getter for telephoneNumber
	 *
	 * @return string
	 */
	public function getTelephoneNumber() {
		return $this->telephoneNumber;
	}
	
	/**
	 * Setter for telephoneNumber
	 *
	 * @param string $telephoneNumber
	 * @return void
	 */
	public function setTelephoneNumber($telephoneNumber) {
		$this->telephoneNumber = $telephoneNumber;
	}
	
	/**
	 * Getter for telephoneCountry
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountry
	 */
	public function getTelephoneCountry() {
		return $this->telephoneCountry;
	}
	
	/**
	 * Setter for telephoneCountry
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountry $telephoneCountry
	 * @return void
	 */
	public function setTelephoneCountry(Tx_Hype_Domain_Model_StaticCountry $telephoneCountry) {
		$this->telephoneCountry = $telephoneCountry;
	}
	
	/**
	 * Getter for telephoneAreaCode
	 *
	 * @return string
	 */
	public function getTelephoneAreaCode() {
		return $this->telephoneAreaCode;
	}
	
	/**
	 * Setter for telephoneAreaCode
	 *
	 * @param string $telephoneAreaCode
	 * @return void
	 */
	public function setTelephoneAreaCode($telephoneAreaCode) {
		$this->telephoneAreaCode = $telephoneAreaCode;
	}
	
	/**
	 * Getter for telephoneExtension
	 *
	 * @return string
	 */
	public function getTelephoneExtension() {
		return $this->telephoneExtension;
	}
	
	/**
	 * Setter for telephoneExtension
	 *
	 * @param string $telephoneExtension
	 * @return void
	 */
	public function setTelephoneExtension($telephoneExtension) {
		$this->telephoneExtension = $telephoneExtension;
	}
	
	/**
	 * Getter for faxNumber
	 *
	 * @return string
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}
	
	/**
	 * Setter for faxNumber
	 *
	 * @param string $faxNumber
	 * @return void
	 */
	public function setFaxNumber($faxNumber) {
		$this->faxNumber = $faxNumber;
	}
	
	/**
	 * Getter for faxCountry
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountry
	 */
	public function getFaxCountry() {
		return $this->faxCountry;
	}
	
	/**
	 * Setter for faxCountry
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountry $faxCountry
	 * @return void
	 */
	public function setFaxCountry(Tx_Hype_Domain_Model_StaticCountry $faxCountry) {
		$this->faxCountry = $faxCountry;
	}
	
	/**
	 * Getter for faxAreaCode
	 *
	 * @return string
	 */
	public function getFaxAreaCode() {
		return $this->faxAreaCode;
	}
	
	/**
	 * Setter for faxAreaCode
	 *
	 * @param string $faxAreaCode
	 * @return void
	 */
	public function setFaxAreaCode($faxAreaCode) {
		$this->faxAreaCode = $faxAreaCode;
	}
	
	/**
	 * Getter for faxExtension
	 *
	 * @return string
	 */
	public function getFaxExtension() {
		return $this->faxExtension;
	}
	
	/**
	 * Setter for faxExtension
	 *
	 * @param string $faxExtension
	 * @return void
	 */
	public function setFaxExtension($faxExtension) {
		$this->faxExtension = $faxExtension;
	}
	
	/**
	 * Getter for cellphoneNumber
	 *
	 * @return string
	 */
	public function getCellphoneNumber() {
		return $this->cellphoneNumber;
	}
	
	/**
	 * Setter for cellphoneNumber
	 *
	 * @param string $cellphoneNumber
	 * @return void
	 */
	public function setCellphoneNumber($cellphoneNumber) {
		$this->cellphoneNumber = $cellphoneNumber;
	}
	
	/**
	 * Getter for cellphoneCountry
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountry
	 */
	public function getCellphoneCountry() {
		return $this->cellphoneCountry;
	}
	
	/**
	 * Setter for cellphoneCountry
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountry $cellphoneCountry
	 * @return void
	 */
	public function setCellphoneCountry(Tx_Hype_Domain_Model_StaticCountry $cellphoneCountry) {
		$this->cellphoneCountry = $cellphoneCountry;
	}
	
	/**
	 * Getter for cellphoneAreaCode
	 *
	 * @return string
	 */
	public function getCellphoneAreaCode() {
		return $this->cellphoneAreaCode;
	}
	
	/**
	 * Setter for cellphoneAreaCode
	 *
	 * @param string $cellphoneAreaCode
	 * @return void
	 */
	public function setCellphoneAreaCode($cellphoneAreaCode) {
		$this->cellphoneAreaCode = $cellphoneAreaCode;
	}
	
	/**
	 * Getter for email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * Setter for email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * Getter for website
	 *
	 * @return string
	 */
	public function getWebsite() {
		return $this->website;
	}
	
	/**
	 * Setter for website
	 *
	 * @param string $website
	 * @return void
	 */
	public function setWebsite($website) {
		$this->website = $website;
	}
	
	/**
	 * Getter for remark
	 *
	 * @return string
	 */
	public function getRemark() {
		return $this->remark;
	}
	
	/**
	 * Setter for remark
	 *
	 * @param string $remark
	 * @return void
	 */
	public function setRemark($remark) {
		$this->remark = $remark;
	}
	
	/**
	 * Getter for relatedPage
	 *
	 * @return integer
	 */
	public function getRelatedPage() {
		return $this->relatedPage;
	}
	
	/**
	 * Setter for relatedPage
	 *
	 * @param integer $relatedPage
	 * @return void
	 */
	public function setRelatedPage($relatedPage) {
		$this->relatedPage = $relatedPage;
	}
	
	/**
	 * Getter for relatedAddress
	 *
	 * @return string
	 */
	public function getRelatedAddress() {
		return $this->relatedAddress;
	}
	
	/**
	 * Setter for relatedAddress
	 *
	 * @param string $relatedAddress
	 * @return void
	 */
	public function setRelatedAddress($relatedAddress) {
		$this->relatedAddress = $relatedAddress;
	}
}
?>