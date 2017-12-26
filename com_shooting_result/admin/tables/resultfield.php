<?php

  defined('_JEXEC') or die('Restricted access');

  class TableResultField extends JTable {

  	function __construct(&$db) {
  		parent::__construct('RESULT_FIELD', 'ID', $db);
  	}

  }
