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
	protected $images;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $gender;
	
	/**
	 * @var integer
	 * @validate DateTime
	 */
	protected $dateOfBirth;
	
	/**
	 * @var Tx_Extbase_Domain_Model_FrontendUser
	 * @lazy
	 */
	protected $frontendUser;
	
	/**
	 * @var Tx_Extbase_Domain_Model_BackendUser
	 * @lazy
	 */
	protected $backendUser;
	
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
	 * Getter for frontendUser
	 *
	 * @return string
	 */
	public function getFrontendUser() {
		return $this->frontendUser;
	}
	
	/**
	 * Setter for frontendUser
	 *
	 * @param Tx_Extbase_Domain_Model_FrontendUser $frontendUser
	 * @return void
	 */
	public function setFrontendUser(Tx_Extbase_Domain_Model_FrontendUser $frontendUser) {
		$this->frontendUser = $frontendUser;
	}
	
	/**
	 * Getter for backendUser
	 *
	 * @return Tx_Extbase_Domain_Model_FrontendUser
	 */
	public function getBackendUser() {
		return $this->backendUser;
	}
	
	/**
	 * Setter for backendUser
	 *
	 * @param Tx_Extbase_Domain_Model_BackendUser $backendUser
	 * @return void
	 */
	public function setBackendUser(Tx_Extbase_Domain_Model_BackendUser $backendUser) {
		$this->backendUser = $backendUser;
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