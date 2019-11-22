<?php

class Uhc_Regionmapping_Model_Mysql4_Regionmapping extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the regionmapping_id refers to the key field in your database table.
        $this->_init('regionmapping/regionmapping', 'regionmapping_id');
    }
}