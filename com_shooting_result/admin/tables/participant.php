<?php

  defined('_JEXEC') or die('Restricted access');

  class TableParticipant extends JTable {

  	function __construct(&$db) {
  		parent::__construct('PARTICIPANT', 'ID', $db);
  	}

  }
