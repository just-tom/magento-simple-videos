<?php

class JustTom_Videos_Block_Widget_Video
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{
    public function _construct()
    {
        if (!$this->hasTemplate()) {
            $this->setTemplate('justtom/widget/video.phtml');
        }
        parent::_construct();
    }

    public function isEnabled()
    {
        return ($this->getData('enabled') !== 'false') ? true : false;
    }

    public function getVideoWidth()
    {
        return ($this->getData('video_width') != NULL) ? $this->getData('video_width') : 600;
    }

    public function getVideoHeight()
    {
        return ($this->getData('video_height') != NULL) ? $this->getData('video_height') : 400;
    }

    public function getEmbedUrl()
    {
        return 'https://www.youtube.com/embed/' . $this->getData('youtube_code');
    }
}