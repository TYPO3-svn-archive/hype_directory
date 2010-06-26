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
 * Register controller
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_HypeDirectory_Controller_RegisterController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_HypeDirectory_Domain_Repository_ContactRepository
	 */
	protected $contactRepository;
	
	/**
	 * @var Tx_HypeDirectory_Domain_Repository_RegisterRepository
	 */
	protected $registerRepository;
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		
		# instantiate the contact repository
		$this->contactRepository = t3lib_div::makeInstance('Tx_HypeDirectory_Domain_Repository_ContactRepository');
		
		# instantiate the register repository
		$this->registerRepository = t3lib_div::makeInstance('Tx_HypeDirectory_Domain_Repository_RegisterRepository');
	}
	
	/**
	 * Initializes the view before invoking an action method.
	 *
	 * @param Tx_Extbase_View_ViewInterface $view The view to be initialized
	 * @return void
	 */
	public function initializeView(Tx_Extbase_MVC_View_ViewInterface $view) {
		$view->assign('settings', $this->settings);
	}
	
	/**
	 * Index action for this controller.
	 *
	 * @return string
	 */
	public function indexAction() {
		
		# find registers
		$registers = $this->registerRepository->findMany(explode(',', $this->settings['view']['register']['uid']));
		
		# assign registers
		$this->view->assign('registers', $registers);
	}
}
?>