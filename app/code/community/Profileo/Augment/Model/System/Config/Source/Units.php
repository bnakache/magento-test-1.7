<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */
class Profileo_Augment_Model_System_Config_Source_Units
{
    public function toOptionArray()
    {
		return array(
		  array('value' => 'mm', 'label' => 'mm'),
		  array('value' => 'cm', 'label' => 'cm'),
		  array('value' => 'm', 'label' => 'm'),
		  array('value' => 'in', 'label' => 'in'),
		  array('value' => 'ft', 'label' => 'ft'),
		);
    }
}