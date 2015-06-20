<?php
/**
 *
 * Removes full duration attribute and creates separate minutes and seconds attributes to replace
 *
 */
/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = Mage::getResourceModel('catalog/setup', 'default_setup');

$installer->startSetup();

$productEntity = $installer->getEntityTypeId(
    Mage_Catalog_Model_Product::ENTITY
);
$videoAttributeGroup = 'Product Video';

$installer->removeAttribute(
    $productEntity,
    'schema_duration'
);

$installer->addAttribute(
    $productEntity,
    'schema_duration_minutes',
    array(
        'type'       => 'int',
        'label'      => 'Schema.org Video Duration Minutes',
        'input'      => 'text',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 70,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->addAttribute(
    $productEntity,
    'schema_duration_seconds',
    array(
        'type'       => 'text',
        'label'      => 'Schema.org Video Duration Seconds',
        'input'      => 'integer',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 80,
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

unset($videoAttributeGroup, $productEntity);

$installer->endSetup();