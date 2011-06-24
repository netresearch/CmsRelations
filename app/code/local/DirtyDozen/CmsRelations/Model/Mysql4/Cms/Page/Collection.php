<?php

class DirtyDozen_CmsRelations_Model_Mysql4_Cms_Page_Relation_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('cmsrelations/cms_page_relation');
    }
}
