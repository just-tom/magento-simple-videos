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

}