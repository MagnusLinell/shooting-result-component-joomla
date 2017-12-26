<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ShootingResultViewWeaponType extends JViewLegacy {

	function display($tpl = null) {
		$this->msg = $this->get('WeaponType')->TITLE;

		if (count($errors = $this->get('Errors'))){
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		parent::display($tpl);
	}

}
