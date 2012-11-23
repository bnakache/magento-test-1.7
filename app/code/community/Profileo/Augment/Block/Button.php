<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */

class Profileo_Augment_Block_Button extends Mage_Catalog_Block_Product
{
	var $helper;
	var $product;

	public function __construct()
	{
		$this->helper = Mage::helper('augment');
		$this->product = Mage::registry('current_product');
		parent::__construct();
	}
	
	public function getAugmentData()
	{
		
		if ($this->getModelingType() == "2D Modeling")
		{
			$_data = $this->getGeneralSettingsData();
			return $_data;
		}
		elseif ($this->getModelingType() == "3D Modeling")
		{
			$_data = $this->getGeneralSettingsData();
			
			switch ($this->helper->get3DLocation())
			{
				case '0': // Local Server

					$_data = $_data + $this->get3DLocalSettings();			
					
				break;
				
				case '1': // AugmentDev Server w/ Product Ref.
					
					$_data['data-ref'] = $this->product->getSku();
					
				break;								
				
/*				case '2': // (AugmentDev Server w/ Product Id)
				
					if($this->getAugmentId())  $_data['data-id'] = $this->getAugmentId(); else $_data['data-id'] = "";
					
				break;
*/								
			}
			
			return $_data;
		}
		
		return false;
	}
	
	private function getModelingType()
	{
		 return $this->product->getAttributeText('augment_type');
	}
	
	private function getAugmentId()
	{
		return $this->product->getAttributeText('augment_id');
	}

	private function getGeneralSettingsData()
	{
		
		if($this->helper->getSenderId())  $_data['data-senderId'] = $this->helper->getSenderId(); else $_data['data-senderId'] = "";
		if($this->helper->getUnit())  $_data['data-units'] = $this->helper->getUnit(); else $_data['data-units'] = "";
		if($this->helper->getLang())  $_data['data-lang'] = $this->helper->getLang(); else $_data['data-lang'] = "";
		if($this->helper->getPopinStyle())  $_data['data-popinStyle'] = $this->helper->getPopinStyle(); else $_data['data-popinStyle'] = "";
		
		return $_data;
	}
	
	private function get3DLocalSettings()
	{
		$_data['data-modelUrl']		= Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).$this->product->getAugmentId();
		$_data['data-title'] 		= $this->product->getName();
		$_data['data-description'] 	= $this->product->getShortDescription();
		$_data['data-price'] 		= $this->product->getFinalPrice();
		$_data['data-author'] 		= ""; 
		$_data['data-currency'] 	= Mage::app()->getStore()->getCurrentCurrencyCode();
		$_data['data-productUrl'] 	= $this->product->getProductUrl();
		$_data['data-thumbnailUrl'] = $this->product->getImageUrl();
		$_data['data-width'] 		= $this->product->getAugmentWidth();
		$_data['data-height'] 		= $this->product->getAugmentHeight();
		$_data['data-depth'] 		= $this->product->getAugmentDepth();
		
		return $_data;
		
	}
	
}