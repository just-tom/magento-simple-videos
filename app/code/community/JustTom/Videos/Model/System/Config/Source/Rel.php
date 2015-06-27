<?php

class JustTom_Videos_Model_System_Config_Source_Rel
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Yes'),
            array('value' => 'rel=0', 'label' => 'No')
        );
    }
}