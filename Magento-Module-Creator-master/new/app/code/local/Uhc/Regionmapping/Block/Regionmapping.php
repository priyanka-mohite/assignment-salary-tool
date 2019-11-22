<?php
class Uhc_Regionmapping_Block_Regionmapping extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getRegionmapping()     
     { 
        if (!$this->hasData('regionmapping')) {
            $this->setData('regionmapping', Mage::registry('regionmapping'));
        }
        return $this->getData('regionmapping');
        
    }
}