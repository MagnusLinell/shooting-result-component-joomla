<?php

  defined('_JEXEC') or die('Restricted access');

  class TableMember extends JTable {

  	function __construct(&$db) {
  		parent::__construct('MEMBER', 'ID', $db);
  	}

  }
