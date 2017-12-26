<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ShootingResultViewCompetition extends JViewLegacy {

	function display($tpl = null) {
		$this->msg = $this->get('Competition')->ID;

		if (count($errors = $this->get('Errors'))){
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		parent::display($tpl);
	}

}
