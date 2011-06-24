<?php
class DirtyDozen_CmsRelations_Block_CmsRelations extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCmsRelations()     
     { 
        if (!$this->hasData('cmsrelations')) {
            $this->setData('cmsrelations', Mage::registry('cmsrelations'));
        }
        return $this->getData('cmsrelations');
        
    }
}
