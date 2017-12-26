<?php

  defined('_JEXEC') or die('Restricted access');

  class ShootingResultModelParticipant extends JModelItem {

  	protected $participants;

    public function getTable($type = 'Participant', $prefix = 'Table', $config = array()) {
  		return JTable::getInstance($type, $prefix, $config);
  	}

  	public function getParticipant($id = 1) {
      if (!is_array($this->participants)){
  			$this->participants = array();
  		}

  		if (!isset($this->participants[$id])){
  			$table = $this->getTable();
  			$table->load($id);
  			$this->participants[$id] = $table;
  		}

  		return $this->participants[$id];
  	}

  }
