<?php

class JustTom_Videos_Model_System_Config_Source_Autoplay
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'autoplay=1', 'label' => 'Yes'),
            array('value' => '', 'label' => 'No')
        );
    }
}