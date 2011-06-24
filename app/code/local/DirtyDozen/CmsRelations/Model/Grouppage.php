<?php
class DirtyDozen_CmsRelations_Model_Grouppage extends Mage_Core_Model_Abstract
{
    protected $_cacheTag = 'cmsrelations_grouppage';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'cmsrelations_grouppage';

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('cmsrelations/grouppage');
    }
}
