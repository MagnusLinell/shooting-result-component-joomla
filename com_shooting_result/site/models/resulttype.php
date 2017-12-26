<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelResultType extends JModelItem {

  	protected $resultTypes;

    public function getTable($type = 'ResultType', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getResultType($id = 1) {
      if (!is_array($this->resultTypes)){
  			$this->resultTypes = array();
  		}

  		if (!isset($this->resultTypes[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->resultTypes[$id] = $table;
  		}

  		return $this->resultTypes[$id];
  	}

    public function getResultTypes() {
      $table = $this->getTable();
      $table->load();
      var_dump($table);
      return $table;
    }

  }
