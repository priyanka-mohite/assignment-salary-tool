<?php
class Uhc_Region Mapping_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/region mapping?id=15 
    	 *  or
    	 * http://site.com/region mapping/id/15 	
    	 */
    	/* 
		$region mapping_id = $this->getRequest()->getParam('id');

  		if($region mapping_id != null && $region mapping_id != '')	{
			$region mapping = Mage::getModel('region mapping/region mapping')->load($region mapping_id)->getData();
		} else {
			$region mapping = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($region mapping == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$region mappingTable = $resource->getTableName('region mapping');
			
			$select = $read->select()
			   ->from($region mappingTable,array('region mapping_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$region mapping = $read->fetchRow($select);
		}
		Mage::register('region mapping', $region mapping);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}