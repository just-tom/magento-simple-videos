<?php

class JustTom_Videos_Test_Helper_Data
    extends EcomDev_PHPUnit_Test_Case
{
    /** @var Mage_Catalog_Model_Product $model */
    protected $model;
    /** @var Justtom_Videos_Helper_Data $helper */
    protected $helper;

    public function setUp()
    {
        $this->model = Mage::getModel('catalog/product');
        $this->helper = Mage::helper('justtom_videos');
    }

    /**
     * @test
     * @loadExpectation testDataHelperGetters
     * @loadFixture testDataHelperGetters
     */
    public function testDataHelperGetters()
    {
        $product = $this->model->load(1);
        $expected = $this->expected('product');

        $this->assertEquals($expected['video_width'], $this->helper->getVideoWidth($product));
        $this->assertEquals($expected['video_height'], $this->helper->getVideoHeight($product));
        $this->assertEquals($expected['youtube_url_code'], $this->helper->getEmbedUrl($product));
        $this->assertEquals($expected['schema_duration'], $this->helper->getVideoDuration($product));
        $this->assertEquals($expected['schema_name'], $product->getSchemaName());
        $this->assertEquals($expected['schema_description'], $product->getSchemaDescription());
    }
}