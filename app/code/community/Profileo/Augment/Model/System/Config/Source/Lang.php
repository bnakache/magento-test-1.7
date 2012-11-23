<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */
class Profileo_Augment_Model_System_Config_Source_Lang
{
    public function toOptionArray()
    {
		return array(
		  array('value' => 'fr', 'label' => 'fr'),
		  array('value' => 'en', 'label' => 'en'),
		  array('value' => 'es', 'label' => 'es'),
		);
    }
}