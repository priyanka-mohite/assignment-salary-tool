<?php

class Uhc_Region Mapping_Model_Mysql4_Region Mapping_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('region mapping/region mapping');
    }
}