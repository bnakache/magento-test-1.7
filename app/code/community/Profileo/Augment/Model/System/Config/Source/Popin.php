<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */
class Profileo_Augment_Model_System_Config_Source_Popin
{
    public function toOptionArray()
    {
		return array(
		  array('value' => 'dark', 'label' => 'Dark'),
		  array('value' => 'light', 'label' => 'Light'),
		);
    }
}