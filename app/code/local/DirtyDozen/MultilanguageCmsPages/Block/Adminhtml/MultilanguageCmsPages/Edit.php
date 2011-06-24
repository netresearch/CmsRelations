<?php

class DirtyDozen_MultilanguageCmsPages_Block_Adminhtml_MultilanguageCmsPages_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'multilanguagecmspages';
        $this->_controller = 'adminhtml_multilanguagecmspages';
        
        $this->_updateButton('save', 'label', Mage::helper('multilanguagecmspages')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('multilanguagecmspages')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('multilanguagecmspages_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'multilanguagecmspages_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'multilanguagecmspages_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('multilanguagecmspages_data') && Mage::registry('multilanguagecmspages_data')->getId() ) {
            return Mage::helper('multilanguagecmspages')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('multilanguagecmspages_data')->getTitle()));
        } else {
            return Mage::helper('multilanguagecmspages')->__('Add Item');
        }
    }
}