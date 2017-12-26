<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ShootingResultViewLocation extends JViewLegacy {

	function display($tpl = null) {
		$this->msg = $this->get('Location')->TITLE;

		if (count($errors = $this->get('Errors'))){
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		parent::display($tpl);
	}

}
