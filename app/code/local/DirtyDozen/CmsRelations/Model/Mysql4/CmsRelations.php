<?php

class DirtyDozen_CmsRelations_Model_Mysql4_CmsRelations extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the cmsrelations_id refers to the key field in your database table.
        $this->_init('cmsrelations/cmsrelations', 'cmsrelations_id');
    }
}
