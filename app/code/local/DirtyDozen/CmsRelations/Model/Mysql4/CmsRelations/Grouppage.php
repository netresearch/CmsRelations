<?php

/**
 * DirtyDozen_CmsRelations_Model_Mysql4_CmsRelations_Grouppage
 * 
 * @package   DirtyDozen_CmsRelations
 * @copyright 2011
 * @author    Thomas Kappel <thomas.kappel@netresearch.de>
 * @license   OSL 3.0
 */
class DirtyDozen_CmsRelations_Model_Mysql4_CmsRelations_Grouppage extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init('cmsrelations/cmsrelations_grouppage', 'group_id');
    }
}

