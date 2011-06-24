<?php

class DirtyDozen_CmsRelations_Block_Adminhtml_CmsRelations_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('cmsrelations_form', array('legend'=>Mage::helper('cmsrelations')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('cmsrelations')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('cmsrelations')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('cmsrelations')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('cmsrelations')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('cmsrelations')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('cmsrelations')->__('Content'),
          'title'     => Mage::helper('cmsrelations')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getCmsRelationsData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getCmsRelationsData());
          Mage::getSingleton('adminhtml/session')->setCmsRelationsData(null);
      } elseif ( Mage::registry('cmsrelations_data') ) {
          $form->setValues(Mage::registry('cmsrelations_data')->getData());
      }
      return parent::_prepareForm();
  }
}
