<?php

  defined('_JEXEC') or die('Restricted access');

  class TableCompetitionType extends JTable {

  	function __construct(&$db) {
  		parent::__construct('COMPETITION_TYPE', 'ID', $db);
  	}

  }
