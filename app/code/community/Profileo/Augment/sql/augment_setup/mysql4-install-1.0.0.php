<?php
/**
 * @category    Profileo
 * @package     Profileo_Augment
 */

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

// adding attribute group
$setup->addAttributeGroup('catalog_product', 'Default', 'AugmentDev', 1000);

$setup->addAttribute('catalog_product', 'augment_type', array(
	'group'     	=> 'AugmentDev',
	'input'         => 'select',
    'type'          => 'text',
    'label'         => 'Modeling Type',
	'backend'       => '',
	'visible'       => 1,
	'required'		=> 0,
	'user_defined'	=> 0,
	'searchable' 	=> 0,
	'filterable' 	=> 0,
	'comparable'	=> 0,
	'is_configurable' => 0,
	'unique'		=> 0,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
	'source' 		=> 'augment/product_attribute_source_modeling',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    //'note'		=> ''
	'option'		=> array (
		'value' => array(
			'twoD'		=> array('2D Modeling'),
			'threedD' 	=> array('3D Modeling'),
			)
		),
));

$setup->addAttribute('catalog_product', 'augment_id', array(
	'group'     	=> 'AugmentDev',
	'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Modeling Url, Ref. or Id',
	'backend'       => '',
	'visible'       => 1,
	'required'		=> 0,
	'user_defined'	=> 0,
	'searchable' 	=> 0,
	'filterable' 	=> 0,
	'comparable'	=> 0,
	'is_configurable' => 0,
	'unique'		=> 0,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    //'note'		=> ''
));

$setup->addAttribute('catalog_product', 'augment_width', array(
	'group'     	=> 'AugmentDev',
	'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Width',
	'backend'       => '',
	'visible'       => 1,
	'required'		=> 0,
	'user_defined'	=> 0,
	'searchable' 	=> 0,
	'filterable' 	=> 0,
	'comparable'	=> 0,
	'is_configurable' => 0,
	'unique'		=> 0,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    //'note'		=> ''
));

$setup->addAttribute('catalog_product', 'augment_height', array(
	'group'     	=> 'AugmentDev',
	'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Height',
	'backend'       => '',
	'visible'       => 1,
	'required'		=> 0,
	'user_defined'	=> 0,
	'searchable' 	=> 0,
	'filterable' 	=> 0,
	'comparable'	=> 0,
	'is_configurable' => 0,
	'unique'		=> 0,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    //'note'		=> ''
));

$setup->addAttribute('catalog_product', 'augment_depth', array(
	'group'     	=> 'AugmentDev',
	'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Depth',
	'backend'       => '',
	'visible'       => 1,
	'required'		=> 0,
	'user_defined'	=> 0,
	'searchable' 	=> 0,
	'filterable' 	=> 0,
	'comparable'	=> 0,
	'is_configurable' => 0,
	'unique'		=> 0,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    //'note'		=> ''
));

$installer->endSetup();