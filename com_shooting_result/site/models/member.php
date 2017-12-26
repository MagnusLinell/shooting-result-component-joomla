<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelMember extends JModelItem {

  	protected $members;

    public function getTable($type = 'Member', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getMember($id = 1) {
      if (!is_array($this->members)){
  			$this->members = array();
  		}

  		if (!isset($this->members[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->members[$id] = $table;
  		}

  		return $this->members[$id];
  	}

  }
