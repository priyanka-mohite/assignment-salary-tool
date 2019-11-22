<?php

class Uhc_Region Mapping_Model_Mysql4_Region Mapping extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the region mapping_id refers to the key field in your database table.
        $this->_init('region mapping/region mapping', 'region mapping_id');
    }
}