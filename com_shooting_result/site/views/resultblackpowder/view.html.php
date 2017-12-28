<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ShootingResultViewResultBlackPowder extends JViewLegacy {

	function display($tpl = null) {
		$results = $this->get('Results');
		$this->assignRef('results', $results);

		$pagination = $this->get('Pagination');
		$this->assignRef('pagination', $pagination);

		if (count($errors = $this->get('Errors'))){
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			return false;
		}

		parent::display($tpl);
	}

}
