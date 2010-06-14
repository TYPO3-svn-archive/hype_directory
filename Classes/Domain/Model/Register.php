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