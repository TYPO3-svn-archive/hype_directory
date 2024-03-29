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
 * Person
 *
 * @package HypeDirectory
 * @subpackage Domain/Model/Contact
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_HypeDirectory_Domain_Model_Contact_Person extends Tx_HypeDirectory_Domain_Model_Contact {

	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $formOfAddress;

	/**
	 * @var string
	 * @validate String
	 */
	protected $academicTitle;

	/**
	 * @var string
	 * @validate String
	 */
	protected $firstName;

	/**
	 * @var string
	 * @validate String
	 */
	protected $middleName;

	/**
	 * @var string
	 * @validate String
	 */
	protected $lastName;

	/**
	 * @var string
	 * @validate String
	 */
	protected $nickname;

	/**
	 * @var string
	 * @validate String
	 */
	protected $initials;

	/**
	 * @var string
	 * @validate String
	 */
	protected $maidenName;

	/**
	 * @var string
	 * @validate String
	 */
	protected $images;

	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $gender;

	/**
	 * @var DateTime
	 */
	protected $dateOfBirth;

	/**
	 * @var string
	 * @validate String
	 */
	protected $placeOfBirth;

	/**
	 * @var DateTime
	 */
	protected $dateOfDeath;

	/**
	 * @var string
	 * @validate String
	 */
	protected $placeOfDeath;

	/**
	 * @var integer
	 */
	protected $maritalStatus;

	/**
	 * @var Tx_Hype_Domain_Model_StaticCountry
	 */
	protected $nationality;

	/**
	 * @var Tx_Hype_Domain_Model_StaticLanguage
	 */
	protected $motherTongue;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HypeDirectory_Domain_Model_Role>
	 * @lazy
	 */
	protected $roles;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HypeDirectory_Domain_Model_Register>
	 * @lazy
	 */
	protected $registers;

	/**
	 * Getter for formOfAddress
	 *
	 * @return integer
	 */
	public function getFormOfAddress() {
		return $this->formOfAddress;
	}

	/**
	 * Setter for formOfAddress
	 *
	 * @param integer $formOfAddress
	 * @return void
	 */
	public function setFormOfAddress($formOfAddress) {
		$this->formOfAddress = $formOfAddress;
	}

	/**
	 * Getter for academicTitle
	 *
	 * @return string
	 */
	public function getAcademicTitle() {
		return $this->academicTitle;
	}

	/**
	 * Setter for academicTitle
	 *
	 * @param string $academicTitle
	 * @return void
	 */
	public function setAcademicTitle($academicTitle) {
		$this->academicTitle = $academicTitle;
	}

	/**
	 * Getter for firstName
	 *
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Setter for firstName
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Getter for middleName
	 *
	 * @return string
	 */
	public function getMiddleName() {
		return $this->middleName;
	}

	/**
	 * Setter for middleName
	 *
	 * @param string $middleName
	 * @return void
	 */
	public function setMiddleName($middleName) {
		$this->middleName = $middleName;
	}

	/**
	 * Getter for lastName
	 *
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Setter for lastName
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Getter for nickname
	 *
	 * @return string
	 */
	public function getNickname() {
		return $this->nickname;
	}

	/**
	 * Setter for nickname
	 *
	 * @param string $nickname
	 * @return void
	 */
	public function setNickname($nickname) {
		$this->nickname = $nickname;
	}

	/**
	 * Getter for initials
	 *
	 * @return string
	 */
	public function getInitials() {
		return $this->initials;
	}

	/**
	 * Setter for initials
	 *
	 * @param string $initials
	 * @return void
	 */
	public function setInitials($initials) {
		$this->initials = $initials;
	}

	/**
	 * Getter for maidenName
	 *
	 * @return string
	 */
	public function getMaidenName() {
		return $this->maidenName;
	}

	/**
	 * Setter for maidenName
	 *
	 * @param string $maidenName
	 * @return void
	 */
	public function setMaidenName($maidenName) {
		$this->maidenName = $maidenName;
	}

	/**
	 * Getter for images
	 *
	 * @return array
	 */
	public function getImages() {
		return explode(',', $this->images);
	}

	/**
	 * Setter for images
	 *
	 * @param array $images
	 * @return void
	 */
	public function setImages(array $images) {
		$this->images = implode(',', $images);
	}

	/**
	 * Getter for gender
	 *
	 * @return integer
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Setter for gender
	 *
	 * @param integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Getter for dateOfBirth
	 *
	 * @return DateTime
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * Setter for dateOfBirth
	 *
	 * @param DateTime $dateOfBirth
	 * @return void
	 */
	public function setDateOfBirth(DateTime $dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * Getter for placeOfBirth
	 *
	 * @return string
	 */
	public function getPlaceOfBirth() {
		return $this->placeOfBirth;
	}

	/**
	 * Setter for placeOfBirth
	 *
	 * @param string $placeOfBirth
	 * @return void
	 */
	public function setPlaceOfBirth($placeOfBirth) {
		$this->placeOfBirth = $placeOfBirth;
	}

	/**
	 * Getter for dateOfDeath
	 *
	 * @return DateTime
	 */
	public function getDateOfDeath() {
		return $this->dateOfDeath;
	}

	/**
	 * Setter for dateOfDeath
	 *
	 * @param DateTime $dateOfDeath
	 * @return void
	 */
	public function setDateOfDeath(DateTime $dateOfDeath) {
		$this->dateOfDeath = $dateOfDeath;
	}

	/**
	 * Getter for placeOfDeath
	 *
	 * @return string
	 */
	public function getPlaceOfDeath() {
		return $this->placeOfDeath;
	}

	/**
	 * Setter for placeOfDeath
	 *
	 * @param string $placeOfDeath
	 * @return void
	 */
	public function setPlaceOfDeath($placeOfDeath) {
		$this->placeOfDeath = $placeOfDeath;
	}

	/**
	 * Getter for formOfAddress
	 *
	 * @return integer
	 */
	public function getMaritalStatus() {
		return $this->maritalStatus;
	}

	/**
	 * Setter for maritalStatus
	 *
	 * @param integer $formOfAddress
	 * @return void
	 */
	public function setMaritalStatus($maritalStatus) {
		$this->maritalStatus = $maritalStatus;
	}

	/**
	 * Getter for nationality
	 *
	 * @return Tx_Hype_Domain_Model_StaticCountry
	 */
	public function getNationality() {
		return $this->nationality;
	}

	/**
	 * Setter for nationality
	 *
	 * @param Tx_Hype_Domain_Model_StaticCountry $nationality
	 * @return void
	 */
	public function setNationality(Tx_Hype_Domain_Model_StaticCountry $nationality) {
		$this->nationality = $nationality;
	}

	/**
	 * Getter for motherTongue
	 *
	 * @return Tx_Hype_Domain_Model_StaticLanguage
	 */
	public function getMotherTongue() {
		return $this->motherTongue;
	}

	/**
	 * Setter for motherTongue
	 *
	 * @param Tx_Hype_Domain_Model_StaticLanguage $motherTongue
	 * @return void
	 */
	public function setMotherTongue(Tx_Hype_Domain_Model_StaticLanguage $motherTongue) {
		$this->motherTongue = $motherTongue;
	}

	/**
	 * Setter for roles
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $roles
	 * @return void
	 */
	public function setRoles(Tx_Extbase_Persistence_ObjectStorage $roles) {
		$this->roles = clone $roles;
	}

	/**
	 * Adds a role
	 *
	 * @param Tx_HypeStore_Domain_Model_Role $role
	 * @return void
	 */
	public function addRole(Tx_HypeStore_Domain_Model_Role $role) {
		$this->roles->attach($role);
	}

	/**
	 * Removes a role
	 *
	 * @param Tx_HypeStore_Domain_Model_Role $role
	 * @return void
	 */
	public function removeRole(Tx_HypeStore_Domain_Model_Role $role) {
		$this->roles->detach($role);
	}

	/**
	 * Remove all role
	 *
	 * @return void
	 */
	public function removeRoles() {
		$this->roles = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Getter for roles
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getRoles() {
		if($this->roles instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->roles->_loadRealInstance();
		}

		return clone $this->roles;
	}

	/**
	 * Setter for registers
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $registers
	 * @return void
	 */
	public function setRegisters(Tx_Extbase_Persistence_ObjectStorage $registers) {
		$this->registers = clone $registers;
	}

	/**
	 * Adds a register
	 *
	 * @param Tx_HypeStore_Domain_Model_Register $register
	 * @return void
	 */
	public function addRegister(Tx_HypeStore_Domain_Model_Register $register) {
		$this->registers->attach($register);
	}

	/**
	 * Removes a register
	 *
	 * @param Tx_HypeStore_Domain_Model_Register $register
	 * @return void
	 */
	public function removeRegister(Tx_HypeStore_Domain_Model_Register $register) {
		$this->registers->detach($register);
	}

	/**
	 * Remove all registers
	 *
	 * @return void
	 */
	public function removeRegisters() {
		$this->registers = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Getter for registers
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getRegisters() {
		if($this->registers instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->registers->_loadRealInstance();
		}

		return clone $this->registers;
	}



	/* Custom functions */

	/**
	 * Getter for the name
	 *
	 * @return string
	 */
	public function getName() {
		return implode(' ', array_filter(array($this->getFirstName(), $this->getMiddleName(), $this->getLastName())));
	}

	/**
	 * Getter for the complete name
	 *
	 * @return string
	 */
	public function getCompleteName() {
		return implode(' ', array_filter(array($this->getAcademicTitle(), $this->getName())));
	}



	/* Magic methods */

	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getName();
	}
}
?>