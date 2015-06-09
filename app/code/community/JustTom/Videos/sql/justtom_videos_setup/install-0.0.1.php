<?php
/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = Mage::getResourceModel('catalog/setup', 'default_setup');

$installer->startSetup();

$productEntity = $installer->getEntityTypeId(Mage_Catalog_Model_Product::ENTITY);
$videoAttributeGroup = 'Product Video';

$installer->addAttributeGroup(
    $productEntity,
    $installer->getDefaultAttributeSetId($productEntity),
    $videoAttributeGroup,
    50
);

$installer->addAttribute(
    $productEntity,
    'youtube_url_code',
    array(
        'type' => 'varchar',
        'label' => 'Youtube URL Code',
        'note' => 'Only input the youtube code for the video in this input box (e.g. only the code after the youtube url http://www.youtube.com/)',
        'input' => 'text',
        'visible' => true,
        'required' => true,
        'sort_order' => 0,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'enable_video',
    array(
        'type' => 'int',
        'label' => 'Enable/Disable Video?',
        'input' => 'select',
        'visible' => true,
        'required' => true,
        'sort_order' => 10,
        'source' => 'eav/entity_attribute_source_boolean',
        'default' => Mage_Eav_Model_Entity_Attribute_Source_Boolean::VALUE_NO,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'date_from',
    array(
        'type' => 'datetime',
        'label' => 'Date From',
        'input' => 'date',
        'visible' => true,
        'required' => false,
        'sort_order' => 20,
        'backend'	=> "eav/entity_attribute_backend_datetime",
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'date_to',
    array(
        'type' => 'datetime',
        'label' => 'Date To',
        'input' => 'date',
        'visible' => true,
        'required' => false,
        'sort_order' => 30,
        'backend'	=> "eav/entity_attribute_backend_datetime",
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_name',
    array(
        'type' => 'varchar',
        'label' => 'Video name',
        'input' => 'text',
        'visible' => true,
        'required' => true,
        'sort_order' => 40,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_thumbnail',
    array(
        'type' => 'varchar',
        'label' => 'Thumbnail',
        'input' => 'text',
        'visible' => true,
        'required' => false,
        'sort_order' => 50,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_duration',
    array(
        'type' => 'varchar',
        'label' => 'Video duration',
        'input' => 'text',
        'visible' => true,
        'required' => false,
        'sort_order' => 60,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_description',
    array(
        'type' => 'varchar',
        'label' => 'Video description',
        'input' => 'text',
        'visible' => true,
        'required' => true,
        'sort_order' => 70,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'placeholder_image',
    array(
        'type' => 'varchar',
        'label' => 'Video Placeholder Image',
        'input' => 'image',
        'visible' => true,
        'required' => false,
        'sort_order' => 80,
        'backend' => 'catalog/category_attribute_backend_image',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group' => $videoAttributeGroup
    )
);

unset($videoAttributeGroup, $productEntity);

$installer->endSetup();