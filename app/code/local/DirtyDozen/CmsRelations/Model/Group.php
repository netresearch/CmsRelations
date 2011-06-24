<?php
class DirtyDozen_CmsRelations_Model_Group extends Mage_Core_Model_Abstract
{
    protected $_cacheTag = 'cmsrelations_group';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'cmsrelations_group';

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('cmsrelations/group');
    }
}
