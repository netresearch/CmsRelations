<?php
class DirtyDozen_MultilanguageCmsPages_Block_MultilanguageCmsPages extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getMultilanguageCmsPages()     
     { 
        if (!$this->hasData('multilanguagecmspages')) {
            $this->setData('multilanguagecmspages', Mage::registry('multilanguagecmspages'));
        }
        return $this->getData('multilanguagecmspages');
        
    }
}