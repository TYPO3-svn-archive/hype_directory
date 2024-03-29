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
 * Corporation
 *
 * @package HypeDirectory
 * @subpackage Domain/Model/Contact
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_HypeDirectory_Domain_Model_Contact_Corporation extends Tx_HypeDirectory_Domain_Model_Contact {

	/**
	 * @var string
	 * @validate String
	 */
	protected $corporateName;

	/**
	 * @var DateTime
	 */
	protected $dateOfFormation;

	/**
	 * @var DateTime
	 */
	protected $dateOfClosure;

	/**
	 * Getter for corporateName
	 *
	 * @return string
	 */
	public function getCorporateName() {
		return $this->corporateName;
	}

	/**
	 * Setter for corporateName
	 *
	 * @param string $corporateName
	 * @return void
	 */
	public function setCorporateName($corporateName) {
		$this->corporateName = $corporateName;
	}

	/**
	 * Getter for dateOfFormation
	 *
	 * @return DateTime
	 */
	public function getDateOfFormation() {
		return $this->dateOfFormation;
	}

	/**
	 * Setter for dateOfFormation
	 *
	 * @param DateTime $dateOfFormation
	 * @return void
	 */
	public function setDateOfFormation(DateTime $dateOfFormation) {
		$this->dateOfFormation = $dateOfFormation;
	}

	/**
	 * Getter for dateOfClosure
	 *
	 * @return DateTime
	 */
	public function getDateOfClosure() {
		return $this->dateOfClosure;
	}

	/**
	 * Setter for dateOfClosure
	 *
	 * @param DateTime $dateOfClosure
	 * @return void
	 */
	public function setDateOfClosure(DateTime $dateOfClosure) {
		$this->dateOfClosure = $dateOfClosure;
	}



	/* Custom functions */

	/**
	 * Getter for the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->getCorporateName();
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