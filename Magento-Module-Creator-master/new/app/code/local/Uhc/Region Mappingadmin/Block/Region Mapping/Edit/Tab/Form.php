<?php

class Uhc_Region Mappingadmin_Block_Region Mapping_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('region mapping_form', array('legend'=>Mage::helper('region mapping')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('region mapping')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('region mapping')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('region mapping')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('region mapping')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('region mapping')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('region mapping')->__('Content'),
          'title'     => Mage::helper('region mapping')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getRegion MappingData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getRegion MappingData());
          Mage::getSingleton('adminhtml/session')->setRegion MappingData(null);
      } elseif ( Mage::registry('region mapping_data') ) {
          $form->setValues(Mage::registry('region mapping_data')->getData());
      }
      return parent::_prepareForm();
  }
}