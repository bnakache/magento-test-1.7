<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */
class Profileo_Augment_Model_System_Config_Source_Location
{
    public function toOptionArray()
    {
		return array(
		  array('value' => 0, 'label' => Mage::helper('augment')->__('Local Server')),
		  array('value' => 1, 'label' => Mage::helper('augment')->__('AugmentDev Server: Use your Product Ref./SKU')),
//		  array('value' => 2, 'label' => Mage::helper('augment')->__('AugmentDev Server: Product ID')),		  
		);
    }
}