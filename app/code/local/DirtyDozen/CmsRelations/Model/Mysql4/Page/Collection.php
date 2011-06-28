<?php
class DirtyDozen_CmsRelations_Model_Mysql4_Page_Collection extends Mage_Cms_Model_Mysql4_Page_Collection
{
    /**
     * Returns pairs identifier - title for unique identifiers
     * and pairs identifier|page_id - title for non-unique after first
     * 
     * @return array
     */
    public function toOptionIdArray()
    {
        $res = array();
        foreach ($this as $item) {
            $identifier = $item->getData('page_id');
            $data['value'] = $identifier;
            $data['label'] = $item->getData('title');
            $res[] = $data;
        }

        return $res;
    }
}
