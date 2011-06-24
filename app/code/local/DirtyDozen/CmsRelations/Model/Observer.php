<?php
class DirtyDozen_CmsRelations_Model_Observer
{
    /**
     * redirectStoreCmsPage 
     * 
     * @param Varien_Event_Observer $observer 
     * @return void
     */
    public function redirectStoreCmsPage(Varien_Event_Observer $observer)
    {
        $customRedirect = $this->getCmsRelationsRedirect(
            $observer->getCondition()->getIdentifier()
        );

        if ($customRedirect) {
            var_dump('Now we should redirect');exit;
            Mage::app()->getFrontController()->getResponse()
                ->setRedirect($this->getRedirectUrl())
                ->sendResponse();
            $request->setDispatched(true);
        }
    }
    
    /**
     * Used to work with Magento 2 (maybe)
     */
    public function adminhtml_cms_page_edit_tab_main_prepare_form($observer)
    {
        // Uses observer
        exit;
    }

    /**
     * add related pages selector to cms page form
     * 
     * @param Varien_Event_Observer $observer 
     * @return void
     */
    public function addRelatedPagesSelector(Varien_Event_Observer $observer)
    {
        $form = $observer->getForm();
        $fieldset = $form->addFieldset('related_pages', array('legend'=>Mage::helper('cmsrelations')->__('Related Pages')));
        $fieldset->addField('related_translations', 'multiselect', array(
            'name'      => 'related_translations[]',
            'label'     => Mage::helper('cmsrelations')->__('Same page in other languages'),
            'title'     => Mage::helper('cmsrelations')->__('Same page in other languages'),
            'values'    => Mage::getSingleton('adminhtml/system_config_source_cms_page')->toOptionArray()
        ));
    }

    /**
     * TODO
     * get multilanguage redirect or return null if no custom redirect is required
     * 
     * @param string $identifier 
     * @return string|null
     */
    protected function getCmsRelationsRedirect($identifier)
    {
        $page   = Mage::getModel('cms/page');
        $pageId = $page->checkIdentifier($identifier, Mage::app()->getStore()->getId());

        return null;
    }

    /**
     * save relations 
     * 
     * @param Varien_Event_Observer $observer 
     *
     * @return void
     */
    public function saveRelations(Varien_Event_Observer $observer)
    {
    }
}
