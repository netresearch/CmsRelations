<?php
class DirtyDozen_CmsRelations_Model_Relations extends Mage_Core_Model_Abstract
{
    protected $_cacheTag = 'cmsrelations';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'cmsrelations';

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('cmsrelations/relations');
    }
}
