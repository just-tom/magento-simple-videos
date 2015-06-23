<?php
/**
 *
 * Creates Video Attribute Group in all available attribute sets.
 * Creates Needed fields for video implementation on product entities.
 *
 */
/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = Mage::getResourceModel('catalog/setup', 'default_setup');

$installer->startSetup();

$productEntity = $installer->getEntityTypeId(
    Mage_Catalog_Model_Product::ENTITY
);
$videoAttributeGroup = 'Product Video';

$attributeSetIds = $installer->getAllAttributeSetIds($productEntity);
foreach ($attributeSetIds as $attributeSetId) {
    $installer->addAttributeGroup(
        $productEntity,
        $attributeSetId,
        $videoAttributeGroup,
        50
    );
}

$installer->addAttribute(
    $productEntity,
    'enable_video',
    array(
        'type'       => 'int',
        'label'      => 'Enable/Disable Video?',
        'input'      => 'select',
        'visible'    => true,
        'required'   => true,
        'sort_order' => 0,
        'source'     => 'eav/entity_attribute_source_boolean',
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'youtube_url_code',
    array(
        'type'       => 'varchar',
        'label'      => 'Youtube URL Code',
        'note'       => 'Only input the youtube code for the video in this input box (e.g. only the code after the youtube url http://www.youtube.com/watch?v=)',
        'input'      => 'text',
        'visible'    => true,
        'required'   => true,
        'sort_order' => 10,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'video_width',
    array(
        'type'       => 'int',
        'label'      => 'Video Width',
        'input'      => 'text',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 20,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'video_height',
    array(
        'type'       => 'int',
        'label'      => 'Video Height',
        'input'      => 'text',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 30,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'placeholder_image',
    array(
        'type'       => 'varchar',
        'label'      => 'Video Placeholder Image',
        'input'      => 'image',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 40,
        'backend'    => 'catalog/category_attribute_backend_image',
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_name',
    array(
        'type'       => 'varchar',
        'label'      => 'Schema.org Video Name',
        'input'      => 'text',
        'visible'    => true,
        'required'   => true,
        'sort_order' => 50,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_description',
    array(
        'type'       => 'varchar',
        'label'      => 'Schema.org Video Description',
        'input'      => 'text',
        'visible'    => true,
        'required'   => true,
        'sort_order' => 60,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_duration',
    array(
        'type'       => 'varchar',
        'label'      => 'Schema.org Video Duration',
        'input'      => 'text',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 70,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

unset($videoAttributeGroup, $productEntity, $attributeSetIds);

$installer->endSetup();