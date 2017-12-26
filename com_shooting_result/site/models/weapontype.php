<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelWeaponType extends JModelItem {

  	protected $weaponTypes;

    public function getTable($type = 'WeaponType', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getWeaponType($id = 1) {
      if (!is_array($this->weaponTypes)){
  			$this->weaponTypes = array();
  		}

  		if (!isset($this->weaponTypes[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->weaponTypes[$id] = $table;
  		}

  		return $this->weaponTypes[$id];
  	}

    public function getWeaponTypes() {
      $table = $this->getTable();
      $table->load();
      var_dump($table);
      return $table;
    }

  }
