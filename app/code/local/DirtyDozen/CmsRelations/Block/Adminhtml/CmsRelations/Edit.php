<?php

class DirtyDozen_CmsRelations_Block_Adminhtml_CmsRelations_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'cmsrelations';
        $this->_controller = 'adminhtml_cmsrelations';
        
        $this->_updateButton('save', 'label', Mage::helper('cmsrelations')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('cmsrelations')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('cmsrelations_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'cmsrelations_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'cmsrelations_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('cmsrelations_data') && Mage::registry('cmsrelations_data')->getId() ) {
            return Mage::helper('cmsrelations')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('cmsrelations_data')->getTitle()));
        } else {
            return Mage::helper('cmsrelations')->__('Add Item');
        }
    }
}
