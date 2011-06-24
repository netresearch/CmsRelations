<?php

class DirtyDozen_MultilanguageCmsPages_Block_Adminhtml_MultilanguageCmsPages_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('multilanguagecmspages_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('multilanguagecmspages')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('multilanguagecmspages')->__('Item Information'),
          'title'     => Mage::helper('multilanguagecmspages')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('multilanguagecmspages/adminhtml_multilanguagecmspages_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}