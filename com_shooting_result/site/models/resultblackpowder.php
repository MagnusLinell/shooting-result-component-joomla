<?php

  defined('_JEXEC') or die('Restricted access');


  class ShootingResultModelResultBlackPowder extends JModelLegacy {

  	private $results = null;

    private $pagination = null;

    function __construct(){
  		parent::__construct();
    	$app = JFactory::getApplication();
      $limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'int');
      $limitstart = JRequest::getVar('limitstart', 0, '', 'int');
      $limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
      $this->setState('limit', $limit);
      $this->setState('limitstart', $limitstart);
    }

  	public function getResults() {
      if (empty($this->results)) {
        $db = JFactory::getDBO();
        $query = 'SELECT * FROM `#__result_black_powder` WHERE 1';
        $this->results = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
      }
      return $this->results;
  	}

    public function getTotal(){
      $db = JFactory::getDBO();
      $db->setQuery( 'SELECT COUNT(*) FROM `#__result_black_powder` WHERE 1' );
      return $db->loadResult();
    }

    public function getPagination(){
      if (empty($this->pagination)) {
        $this->pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit'));
      }
      return $this->pagination;
    }

  }
