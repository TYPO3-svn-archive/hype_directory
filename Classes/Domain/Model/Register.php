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
 * Register
 *
 * @package HypeDirectory
 * @subpackage Domain\Model
 * @version $Id$
 * @scope prototype
 * @entity
 */
class Tx_HypeDirectory_Domain_Model_Register extends Tx_Extbase_DomainObject_AbstractEntity {

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
	protected $name;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HypeDirectory_Domain_Model_Contact>
	 * @lazy
	 */
	protected $contacts;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HypeDirectory_Domain_Model_Role>
	 * @lazy
	 */
	protected $roles;

	/**
	 * Getter for name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

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
	 * Setter for name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Setter for contacts
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $contacts
	 * @return void
	 */
	public function setContacts(Tx_Extbase_Persistence_ObjectStorage $contacts) {
		$this->contacts = clone $contacts;
	}

	/**
	 * Adds a contact
	 *
	 * @param Tx_HypeDirectory_Domain_Model_Contact $contact
	 * @return void
	 */
	public function addContact(Tx_HypeDirectory_Domain_Model_Contact $contact) {
		$this->contacts->attach($contact);
	}

	/**
	 * Removes a contact
	 *
	 * @param Tx_HypeDirectory_Domain_Model_Contact $contact
	 * @return void
	 */
	public function removeContact(Tx_HypeDirectory_Domain_Model_Contact $contact) {
		$this->contacts->detach($contact);
	}

	/**
	 * Remove all contacts
	 *
	 * @return void
	 */
	public function removeContacts() {
		$this->contacts = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Getter for contacts
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getContacts() {
		if($this->contacts instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->contacts->_loadRealInstance();
		}

		return clone $this->contacts;
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
	 * @param Tx_HypeDirectory_Domain_Model_Role $role
	 * @return void
	 */
	public function addRole(Tx_HypeDirectory_Domain_Model_Role $role) {
		$this->roles->attach($role);
	}

	/**
	 * Removes a role
	 *
	 * @param Tx_HypeDirectory_Domain_Model_Role $role
	 * @return void
	 */
	public function removeRole(Tx_HypeDirectory_Domain_Model_Role $role) {
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