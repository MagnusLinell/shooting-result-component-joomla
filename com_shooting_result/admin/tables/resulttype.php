<?php

  defined('_JEXEC') or die('Restricted access');

  class TableResultType extends JTable {

  	function __construct(&$db) {
  		parent::__construct('RESULT_TYPE', 'ID', $db);
  	}

  }
