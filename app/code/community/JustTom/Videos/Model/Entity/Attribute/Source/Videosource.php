<?php

class JustTom_Videos_Model_Entity_Attribute_Source_Videosource extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    /**
     * Retrieve all options array
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (is_null($this->_options)) {
            $this->_options = array(
                array(
                    'label' => Mage::helper('justtom_videos')->__('YouTube'),
                    'value' => 'youtube'
                ),
                array(
                    'label' => Mage::helper('justtom_videos')->__('Vimeo'),
                    'value' => 'vimeo'
                ),
            );
        }

        return $this->_options;
    }

    public function toOptionArray()
    {

        return array(
            array(
                'label' => Mage::helper('justtom_videos')->__('YouTube'),
                'value' => 'youtube'
            ),
            array(
                'label' => Mage::helper('justtom_videos')->__('Vimeo'),
                'value' => 'vimeo'
            ),
        );

    }

}