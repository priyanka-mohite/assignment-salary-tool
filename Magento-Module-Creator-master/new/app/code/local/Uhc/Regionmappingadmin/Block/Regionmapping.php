<?php
class Uhc_Regionmappingadmin_Block_Adminhtml_Regionmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'regionmappingadmin';
    $this->_blockGroup = 'regionmappingadmin';
    $this->_headerText = Mage::helper('regionmappingadmin')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('regionmappingadmin')->__('Add Item');
    parent::__construct();
  }
}
