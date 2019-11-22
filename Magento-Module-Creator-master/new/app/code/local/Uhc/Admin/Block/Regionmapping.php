<?php
class Uhc_Admin_Block_Adminhtml_Regionmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'admin';
    $this->_blockGroup = 'admin';
    $this->_headerText = Mage::helper('admin')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('admin')->__('Add Item');
    parent::__construct();
  }
}
