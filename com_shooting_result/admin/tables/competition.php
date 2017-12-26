<?php

  defined('_JEXEC') or die('Restricted access');

  class TableCompetition extends JTable {

  	function __construct(&$db) {
  		parent::__construct('COMPETITION', 'ID', $db);
  	}

  }
