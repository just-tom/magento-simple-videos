<?php

class JustTom_Videos_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    const XML_CONFIG_PATH_FLAG_INFO = "justtom_videos/global/info";
    const XML_CONFIG_PATH_FLAG_REL = "justtom_videos/global/rel";
    const XML_CONFIG_PATH_FLAG_CONTROLS = "justtom_videos/global/controls";
    const XML_CONFIG_PATH_FLAG_PRIVACY = "justtom_videos/global/privacy";

    public function getVideoWidth($product)
    {
        return ($product->getVideoWidth() != null) ? $product->getVideoWidth()
            : 600;
    }

    public function getVideoHeight($product)
    {
        return ($product->getVideoHeight() != null) ? $product->getVideoHeight()
            : 400;
    }

    public function getEmbedUrl($product)
    {
        return 'https://www.' . $this->getPrivacyParam() . '.com/embed/'
        . $product->getYoutubeUrlCode() . '?'
        . $this->getUrlParams();
    }

    public function getVideoDuration($product)
    {
        $minutes = ($product->getSchemaDurationMinutes() != null)
            ? $product->getSchemaDurationMinutes() : 0;
        $seconds = ($product->getSchemaDurationSeconds() != null)
            ? $product->getSchemaDurationSeconds() : 00;

        return 'T' . $minutes . 'S' . $seconds;
    }

    public function getImageUrl($product)
    {
        return Mage::getBaseUrl('media') . 'wysiwyg/'
        . $product->getPlaceholderImage();
    }

    public function hasPlaceholderImage($product)
    {
        return ($product->getPlaceholderImage() != null) ? true : false;
    }

    protected function getUrlParams()
    {
        return $this->getRelParam()
        . $this->getControlsParam()
        . $this->getInfoParam();
    }

    protected function getRelParam()
    {
        $param = Mage::getStoreConfig(self::XML_CONFIG_PATH_FLAG_REL);
        return ($param != "") ? $param . "&amp;" : '';
    }

    protected function getInfoParam()
    {
        $param = Mage::getStoreConfig(self::XML_CONFIG_PATH_FLAG_INFO);
        return ($param != "") ? $param : '';
    }

    protected function getControlsParam()
    {
        $param = Mage::getStoreConfig(self::XML_CONFIG_PATH_FLAG_CONTROLS);
        return ($param != "") ? $param . "&amp;"  : '';
    }

    protected function getPrivacyParam()
    {
        $param = Mage::getStoreConfig(self::XML_CONFIG_PATH_FLAG_PRIVACY);
        return ($param == '-nocookie') ? 'youtube-nocookie' : 'youtube';
    }
}