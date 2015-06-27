<?php

class JustTom_Videos_Model_System_Config_Source_Controls
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Yes'),
            array('value' => 'controls=0', 'label' => 'No')
        );
    }
}