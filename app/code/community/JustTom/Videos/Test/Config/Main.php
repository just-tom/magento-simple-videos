<?php

class JustTom_Videos_Test_Config_Main
    extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * Test that the code pool of the module is `community`
     * Test if the module is active
     * Test module version
     */
    public function testModuleConfig()
    {
        $this->assertModuleCodePool($this->expected('module')->getCodePool());
        $this->assertModuleIsActive();
        $this->assertModuleVersionGreaterThanOrEquals($this->expected('module')->getVersion());
    }

    /**
     * Test Layout files
     *
     * @test
     */
    public function testLayoutFiles()
    {
        $this->assertLayoutFileDefined('frontend','justtom/videos.xml');
        $this->assertLayoutFileExists('frontend','justtom/videos.xml');
    }

    /**
     * Test any helpers created
     */
    public function testHelperAliases()
    {
        $this->assertHelperAlias('justtom_videos',
            'JustTom_Videos_Helper_Data');
    }

}