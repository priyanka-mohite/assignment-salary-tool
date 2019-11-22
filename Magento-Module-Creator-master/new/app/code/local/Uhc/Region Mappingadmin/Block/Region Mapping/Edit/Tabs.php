<?php

class Uhc_Region Mappingadmin_Block_Region Mapping_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('region mappingadmin_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('region mapping')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('region mapping')->__('Item Information'),
          'title'     => Mage::helper('region mapping')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('region mapping/adminhtml_region mapping_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}