<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelCompetition extends JModelItem {

  	protected $competitions;

    public function getTable($type = 'Competition', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getCompetition($id = 1) {
      if (!is_array($this->competitions)){
  			$this->competitions = array();
  		}

  		if (!isset($this->competitions[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->competitions[$id] = $table;
  		}

  		return $this->competitions[$id];
  	}

  }
