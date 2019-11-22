<?php
class Uhc_Region Mappingadmin_Block_Adminhtml_Region Mapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'region mappingadmin';
    $this->_blockGroup = 'region mappingadmin';
    $this->_headerText = Mage::helper('region mappingadmin')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('region mappingadmin')->__('Add Item');
    parent::__construct();
  }
}
