<?php

  defined('_JEXEC') or die('Restricted access');

  class TableWeaponType extends JTable {

  	function __construct(&$db) {
  		parent::__construct('WEAPON_TYPE', 'ID', $db);
  	}

  }
