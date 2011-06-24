<?php
class DirtyDozen_CmsRelations_Block_Adminhtml_CmsRelations extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_cmsrelations';
    $this->_blockGroup = 'cmsrelations';
    $this->_headerText = Mage::helper('cmsrelations')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('cmsrelations')->__('Add Item');
    parent::__construct();
  }
}
