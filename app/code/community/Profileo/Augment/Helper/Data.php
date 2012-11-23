<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */


class Profileo_Augment_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_CONFIG_AUGMENT_GENERAL_SETTINGS_ACTIVE 		= 'augment/general_settings/active';
	const XML_CONFIG_AUGMENT_GENERAL_SETTINGS_SENDER_ID		= 'augment/general_settings/sender_id';
	const XML_CONFIG_AUGMENT_GENERAL_SETTINGS_UNITS			= 'augment/general_settings/units';
	const XML_CONFIG_AUGMENT_GENERAL_SETTINGS_LANG			= 'augment/general_settings/lang';
	const XML_CONFIG_AUGMENT_GENERAL_SETTINGS_POPIN_STYLE	= 'augment/general_settings/popin_style';
	const XML_CONFIG_AUGMENT_PRODUCTS_3D_LOCATION			= 'augment/products_3d/location';
	
	const ATTRIBUTE_CODE_ID		= 'augment_id';
	const ATTRIBUTE_CODE_WIDTH	= 'augment_width';
	const ATTRIBUTE_CODE_HEIGHT	= 'augment_height';
	const ATTRIBUTE_CODE_DEPTH	= 'augment_depth';
	
	
    public function isActive($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_GENERAL_SETTINGS_ACTIVE, $storeId);
    }
    
    public function getSenderId($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_GENERAL_SETTINGS_SENDER_ID, $storeId);
    }
    
    public function getUnit($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_GENERAL_SETTINGS_UNITS, $storeId);
    }
    
    public function getLang($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_GENERAL_SETTINGS_LANG, $storeId);
    }
    
    public function getPopinStyle($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_GENERAL_SETTINGS_POPIN_STYLE, $storeId);
    }

    public function get3DLocation($storeId = null)
    {
    	return Mage::getStoreConfig(self::XML_CONFIG_AUGMENT_PRODUCTS_3D_LOCATION, $storeId);
    }

}