<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelLocation extends JModelItem {

  	protected $locations;

    public function getTable($type = 'Location', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getLocation($id = 1) {
      if (!is_array($this->locations)){
  			$this->locations = array();
  		}

  		if (!isset($this->locations[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->locations[$id] = $table;
  		}

  		return $this->locations[$id];
  	}

    public function getLocations() {
      $table = $this->getTable();
      $table->load();
      var_dump($table);
      return $table;
    }

  }
