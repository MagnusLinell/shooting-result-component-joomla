<?php

  defined('_JEXEC') or die('Restricted access');

  class TableLocation extends JTable {

  	function __construct(&$db) {
  		parent::__construct('LOCATION', 'ID', $db);
  	}

  }
