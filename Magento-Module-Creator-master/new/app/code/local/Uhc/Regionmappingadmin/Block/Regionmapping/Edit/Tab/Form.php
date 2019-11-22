<?php

class Uhc_Regionmappingadmin_Block_Regionmapping_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('regionmapping_form', array('legend'=>Mage::helper('regionmapping')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('regionmapping')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('regionmapping')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('regionmapping')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('regionmapping')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('regionmapping')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('regionmapping')->__('Content'),
          'title'     => Mage::helper('regionmapping')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getRegionmappingData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getRegionmappingData());
          Mage::getSingleton('adminhtml/session')->setRegionmappingData(null);
      } elseif ( Mage::registry('regionmapping_data') ) {
          $form->setValues(Mage::registry('regionmapping_data')->getData());
      }
      return parent::_prepareForm();
  }
}