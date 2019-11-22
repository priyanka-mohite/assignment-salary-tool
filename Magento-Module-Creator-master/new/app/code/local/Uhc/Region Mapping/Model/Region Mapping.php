<?php

class Uhc_Region Mapping_Model_Region Mapping extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('region mapping/region mapping');
    }
}