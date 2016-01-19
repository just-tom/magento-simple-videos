<?php

$installer = Mage::getResourceModel('catalog/setup', 'default_setup');

$installer->startSetup();
$productEntity = $installer->getEntityTypeId(
    Mage_Catalog_Model_Product::ENTITY
);

$videoAttributeGroup = 'Product Video';

$installer->updateAttribute('catalog_product', 'youtube_url_code', array(
    'attribute_code' => 'video_url_code',
    'frontend_label'      => 'Video URL Code',
    'note'       => 'Only input the code for the video in this input box (e.g. only the code after the url http://www.youtube.com/watch?v= or https://player.vimeo.com/video/)',
));

$installer->addAttribute(
    $productEntity,
    'video_source',
    array(
        'type'       => 'varchar',
        'label'      => 'Source of Video',
        'input'      => 'select',
        'visible'    => true,
        'required'   => false,
        'sort_order' => 70,
        'source'     => 'justtom_videos/entity_attribute_source_videosource',
        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'      => $videoAttributeGroup
    )
);

$installer->endSetup();