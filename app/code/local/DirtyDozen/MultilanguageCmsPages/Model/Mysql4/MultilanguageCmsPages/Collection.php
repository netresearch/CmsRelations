<?php

class DirtyDozen_MultilanguageCmsPages_Model_Mysql4_MultilanguageCmsPages_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('multilanguagecmspages/multilanguagecmspages');
    }
}