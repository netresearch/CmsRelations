<?php
class DirtyDozen_MultilanguageCmsPages_Block_Adminhtml_MultilanguageCmsPages extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_multilanguagecmspages';
    $this->_blockGroup = 'multilanguagecmspages';
    $this->_headerText = Mage::helper('multilanguagecmspages')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('multilanguagecmspages')->__('Add Item');
    parent::__construct();
  }
}