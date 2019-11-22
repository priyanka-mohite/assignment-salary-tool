<?php
class Uhc_Regionmapping_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/regionmapping?id=15 
    	 *  or
    	 * http://site.com/regionmapping/id/15 	
    	 */
    	/* 
		$regionmapping_id = $this->getRequest()->getParam('id');

  		if($regionmapping_id != null && $regionmapping_id != '')	{
			$regionmapping = Mage::getModel('regionmapping/regionmapping')->load($regionmapping_id)->getData();
		} else {
			$regionmapping = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($regionmapping == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$regionmappingTable = $resource->getTableName('regionmapping');
			
			$select = $read->select()
			   ->from($regionmappingTable,array('regionmapping_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$regionmapping = $read->fetchRow($select);
		}
		Mage::register('regionmapping', $regionmapping);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}