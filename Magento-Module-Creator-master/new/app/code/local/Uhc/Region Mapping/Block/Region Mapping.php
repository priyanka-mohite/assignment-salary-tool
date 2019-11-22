<?php
class Uhc_Region Mapping_Block_Region Mapping extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getRegion Mapping()     
     { 
        if (!$this->hasData('region mapping')) {
            $this->setData('region mapping', Mage::registry('region mapping'));
        }
        return $this->getData('region mapping');
        
    }
}