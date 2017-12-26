<?php

  defined('_JEXEC') or die('Restricted access');

  class TableResultPpc extends JTable {

  	function __construct(&$db) {
  		parent::__construct('RESULT_PPC', 'ID', $db);
  	}

  }
