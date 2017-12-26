<?php

  defined('_JEXEC') or die('Restricted access');

  class TableResultPrecision extends JTable {

  	function __construct(&$db) {
  		parent::__construct('RESULT_PRECISION', 'ID', $db);
  	}

  }
