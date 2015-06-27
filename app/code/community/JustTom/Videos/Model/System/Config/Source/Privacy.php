<?php

class JustTom_Videos_Model_System_Config_Source_Privacy
{
    public function toOptionArray()
    {
        return array(
            array('value' => '-nocookie', 'label' => 'Yes'),
            array('value' => '', 'label' => 'No')
        );
    }
}