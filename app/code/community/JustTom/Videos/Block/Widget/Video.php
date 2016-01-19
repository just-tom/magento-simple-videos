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
        return ($this->getData('video_width') != null) ? $this->getData(
            'video_width'
        ) : 600;
    }

    public function getVideoHeight()
    {
        return ($this->getData('video_height') != null) ? $this->getData(
            'video_height'
        ) : 400;
    }

    protected function getVideoSource()
    {
        return ($this->getData('video_source') != null) ? $this->getData(
            'video_source'
        ) : 'youtube';
    }

    public function getEmbedUrl()
    {
        switch($this->getVideoSource()) {
            case "youtube":
                return $this->getYouTubeEmbedUrl();
                break;
            case "vimeo":
                return $this->getVimeoEmbedUrl();
                break;
            default:
                return '';
                break;
        }
    }

    protected function getYoutubeEmbedUrl()
    {
        return 'https://www.youtube.com/embed/' . $this->getData('video_code')
        . '?rel=0&amp;controls=0&amp;showinfo=0';
    }

    protected function getVimeoEmbedUrl()
    {
        return 'https://player.vimeo.com/video/'
        . $this->getData('video_code');
    }

    public function getVideoDuration()
    {
        $minutes = ($this->getData('schema_duration_minutes') != null)
            ? $this->getData('schema_duration_minutes') : '0';
        $seconds = ($this->getData('schema_duration_seconds') != null)
            ? $this->getData('schema_duration_seconds') : '00';

        return 'T' . $minutes . 'S' . $seconds;
    }

    public function getImageUrl()
    {
        return Mage::getBaseUrl('media') . $this->getData('placeholder_image');
    }

    public function hasPlaceholderImage()
    {
        return ($this->getData('placeholder_image') != null) ? true : false;
    }
}