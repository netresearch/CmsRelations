<?php
/**
 * Page Relation
 */
class DirtyDozen_CmsRelations_Model_Cms_Page_Relation extends Mage_Core_Model_Abstract
{
    const TYPE_TRANSLATION=1;

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('cmsrelations/cms_page_relation');
    }
}
