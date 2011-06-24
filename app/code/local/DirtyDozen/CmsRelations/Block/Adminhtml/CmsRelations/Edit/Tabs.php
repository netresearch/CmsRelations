<?php

class DirtyDozen_CmsRelations_Block_Adminhtml_CmsRelations_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('cmsrelations_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('cmsrelations')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('cmsrelations')->__('Item Information'),
          'title'     => Mage::helper('cmsrelations')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('cmsrelations/adminhtml_cmsrelations_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
