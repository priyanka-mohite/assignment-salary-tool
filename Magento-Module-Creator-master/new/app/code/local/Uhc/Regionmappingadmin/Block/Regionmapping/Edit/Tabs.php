<?php

class Uhc_Regionmappingadmin_Block_Regionmapping_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('regionmappingadmin_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('regionmapping')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('regionmapping')->__('Item Information'),
          'title'     => Mage::helper('regionmapping')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('regionmapping/adminhtml_regionmapping_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
