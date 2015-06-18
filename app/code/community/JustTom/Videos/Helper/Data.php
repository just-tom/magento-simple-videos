<?php

class JustTom_Videos_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    public function getVideoWidth($product)
    {
        return ($product->getVideoWidth() != NULL) ? $product->getVideoWidth() : 600;
    }

    public function getVideoHeight($product)
    {
        return ($product->getVideoHeight() != NULL) ? $product->getVideoHeight() : 400;
    }

    public function getEmbedUrl($product)
    {
        return 'https://www.youtube.com/embed/' . $product->getYoutubeUrlCode();
    }
}