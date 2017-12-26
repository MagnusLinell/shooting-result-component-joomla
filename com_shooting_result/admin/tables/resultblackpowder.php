<?php

  defined('_JEXEC') or die('Restricted access');

  class TableResultBlackPowder extends JTable {

  	function __construct(&$db) {
  		parent::__construct('RESULT_BLACK_POWDER', 'ID', $db);
  	}

  }
