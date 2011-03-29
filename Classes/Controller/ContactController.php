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
 * Contact controller
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_HypeDirectory_Controller_ContactController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_HypeDirectory_Domain_Repository_ContactRepositoryInterface
	 */
	protected $contactRepository;

	/**
	 * Injects the contact repository
	 *
	 * @param Tx_HypeDirectory_Domain_Repository_ContactRepositoryInterface $contactRepository
	 * @return void
	 */
	public function injectContactRepository(Tx_HypeDirectory_Domain_Repository_ContactRepositoryInterface $contactRepository) {
		$this->contactRepository = $contactRepository;
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
	 * @param Tx_HypeDirectory_Domain_Model_Contact $contact
	 * @param Tx_HypeDirectory_Domain_Model_Role $role
	 * @dontvalidate $contact
	 * @dontvalidate $role
	 */
	public function indexAction(Tx_HypeDirectory_Domain_Model_Contact $contact = NULL, Tx_HypeDirectory_Domain_Model_Role $role = NULL) {

		# set a default/fallback contact
		if(!$contact && $this->settings['view']['contact']['uid']) {
			$contact = $this->contactRepository->findByUid((int)$this->settings['view']['contact']['uid']);
		}

		# set contact
		if($contact) {

			# assign contact
			$this->view->assign('contact', $contact);

			# overload document title
			if($this->settings['view']['contact']['common']['overrideDocumentTitle']) {
				Tx_Hype_Utility_Document::setTitle($contact->getLabel());
			}
		}

		# set role and contact
		if($role) {
			$this->view->assign('role', $role);
		}
	}

	/**
	 * Record action for this controller.
	 *
	 * @return void
	 */
	public function recordAction() {
		$record = $this->request->getContentObjectData();
		$contact = $this->contactRepository->findByUid((int)$record['uid']);
		$this->view->assign('contact', $contact);
	}
}
?>