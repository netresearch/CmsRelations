<?php
class DirtyDozen_CmsRelations_Model_Cms_Page extends Mage_Cms_Model_Page
{
    /**
     * get related pages
     * 
     * @return Collection
     */
    public function getRelatedTranslationsDb()
    {
        Mage::log('Loading related pages of page: ' . $this->getId());

        $relationCollection = Mage::getModel('cmsrelations/relations')
            ->getCollection()
			->addFieldToFilter('type', DirtyDozen_CmsRelations_Model_Cms_Page_Relation::TYPE_TRANSLATION)
			->addFieldToFilter('page_id', $this->getId());

        return $relationCollection;
    }

    /**
     * Insert/update data in db
     * 
     * @return void
     */
    public function _afterSave()
    {
        $db = Mage::getSingleton('core/resource')->getConnection('core_write');

        $tableName  = Mage::getSingleton('core/resource')->getTableName('cmsrelations/relations');
        $condition = array($db->quoteInto('page_id = ?', $this->getId()));
        $db->delete($tableName, $condition);

        $db->commit();

        $postRelations = $this->getRelatedTranslations();
        foreach ($postRelations as $relation) {
            $data = array(
                'page_id'           => $this->getId(),
                'related_page_id'   => $relation,
                'type'              => DirtyDozen_CmsRelations_Model_Cms_Page_Relation::TYPE_TRANSLATION,
            );

            // @todo: Do it all with a single insert
            $db->insert($tableName, $data);
        }
    }
}
