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
	 * @var integer
	 * @validate Integer
	 */
	protected $state;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $country;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $telephone;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $cellphone;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $fax;
	
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
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * Setter for state
	 *
	 * @param string $state
	 * @return void
	 */
	public function setState($state) {
		$this->state = $state;
	}
	
	/**
	 * Getter for country
	 *
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * Setter for country
	 *
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}
	
	/**
	 * Getter for telephone
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}
	
	/**
	 * Setter for telephone
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}
	
	/**
	 * Getter for cellphone
	 *
	 * @return string
	 */
	public function getCellphone() {
		return $this->cellphone;
	}
	
	/**
	 * Setter for cellphone
	 *
	 * @param string $cellphone
	 * @return void
	 */
	public function setCellphone($cellphone) {
		$this->cellphone = $cellphone;
	}
	
	/**
	 * Getter for fax
	 *
	 * @return string
	 */
	public function getFax() {
		return $this->fax;
	}
	
	/**
	 * Setter for fax
	 *
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
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