<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelResultField extends JModelItem {

  	protected $results;

    public function getTable($type = 'ResultField', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getResults($id = 1) {
      if (!is_array($this->results)){
  			$this->results = array();
  		}

  		if (!isset($this->results[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->results[$id] = $table;
  		}

  		return $this->results[$id];
  	}

  }
