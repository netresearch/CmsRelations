<?php
class DirtyDozen_CmsRelations_Model_Mysql4_Page_Collection extends Mage_Cms_Model_Mysql4_Page_Collection
{
    /**
     * Returns pairs identifier - title for unique identifiers
     * and pairs identifier|page_id - title for non-unique after first
     * 
     * @param integer $id
     * @return array
     */
    public function toOptionIdArray($id)
    {
        $res = array();
        foreach ($this as $item) {
            $identifier = $item->getData('page_id');

            if ($id != $identifier) {
                $data['value'] = $identifier;
                $data['label'] = $item->getData('title');
                $res[] = $data;
            }
        }

        return $res;
    }
}
