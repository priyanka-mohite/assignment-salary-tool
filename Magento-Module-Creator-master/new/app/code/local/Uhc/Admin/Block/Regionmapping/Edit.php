<?php

class Uhc_Admin_Block_Regionmapping_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'admin';
        $this->_controller = 'admin';
        
        $this->_updateButton('save', 'label', Mage::helper('regionmapping')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('regionmapping')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('regionmapping_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'regionmapping_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'regionmapping_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('regionmapping_data') && Mage::registry('regionmapping_data')->getId() ) {
            return Mage::helper('regionmapping')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('regionmapping_data')->getTitle()));
        } else {
            return Mage::helper('regionmapping')->__('Add Item');
        }
    }
}
