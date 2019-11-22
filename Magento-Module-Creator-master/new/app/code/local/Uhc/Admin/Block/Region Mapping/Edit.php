<?php

class Uhc_Admin_Block_Region Mapping_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'admin';
        $this->_controller = 'admin';
        
        $this->_updateButton('save', 'label', Mage::helper('region mapping')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('region mapping')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('region mapping_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'region mapping_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'region mapping_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('region mapping_data') && Mage::registry('region mapping_data')->getId() ) {
            return Mage::helper('region mapping')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('region mapping_data')->getTitle()));
        } else {
            return Mage::helper('region mapping')->__('Add Item');
        }
    }
}
