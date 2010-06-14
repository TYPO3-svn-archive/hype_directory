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
 * Role
 *
 * @package HypeDirectory
 * @subpackage Domain\Model
 * @version $Id$
 * @scope prototype
 * @entity
 */
class Tx_HypeDirectory_Domain_Model_Role extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $title;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $additionalTitle;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HypeDirectory_Domain_Model_Contact>
	 * @lazy
	 */
	protected $contacts;
	
	/**
	 * @var Tx_HypeDirectory_Domain_Model_Register
	 * @lazy
	 */
	protected $register;
	
	/**
	 * Getter for title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Getter for additionalTitle
	 *
	 * @return string
	 */
	public function getAdditionalTitle() {
		return $this->additionalTitle;
	}
	
	/**
	 * Setter for additionalTitle
	 *
	 * @param string $additionalTitle
	 * @return void
	 */
	public function setAdditionalTitle($additionalTitle) {
		$this->additionalTitle = $additionalTitle;
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
	 * @param Tx_HypeStore_Domain_Model_Contact $contact
	 * @return void
	 */
	public function addContact(Tx_HypeStore_Domain_Model_Contact $contact) {
		$this->contacts->attach($contact);
	}
	
	/**
	 * Removes a contact
	 *
	 * @param Tx_HypeStore_Domain_Model_Contact $contact
	 * @return void
	 */
	public function removeContact(Tx_HypeStore_Domain_Model_Contact $contact) {
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
	 * Getter for register
	 *
	 * @return Tx_HypeDirectory_Domain_Model_Register
	 */
	public function getRegister() {
		return $this->register;
	}
	
	/**
	 * Setter for register
	 *
	 * @param Tx_HypeDirectory_Domain_Model_Register $register
	 * @return void
	 */
	public function setRegister(Tx_HypeDirectory_Domain_Model_Register $register) {
		$this->register = $register;
	}
	
	
	
	/* Magic methods */
	
	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getTitle();
	}
}
?>