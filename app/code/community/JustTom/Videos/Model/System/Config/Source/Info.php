<?php

class JustTom_Videos_Model_System_Config_Source_Info
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Yes'),
            array('value' => 'showinfo=0', 'label' => 'No')
        );
    }
}