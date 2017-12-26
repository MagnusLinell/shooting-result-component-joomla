<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelCompetitionType extends JModelItem {

  	protected $competitionTypes;

    public function getTable($type = 'CompetitionType', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getCompetitionType($id = 1) {
      if (!is_array($this->competitionTypes)){
  			$this->weaponTypes = array();
  		}

  		if (!isset($this->competitionTypes[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->competitionTypes[$id] = $table;
  		}

  		return $this->competitionTypes[$id];
  	}

    public function getCompetitionTypes() {
      $table = $this->getTable();
      $table->load();
      var_dump($table);
      return $table;
    }

  }
