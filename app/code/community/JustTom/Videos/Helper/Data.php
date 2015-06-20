<?php

class JustTom_Videos_Helper_Data
    extends Mage_Core_Helper_Abstract
{
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
        return 'https://www.youtube.com/embed/' . $product->getYoutubeUrlCode()
        . '?rel=0&amp;controls=0&amp;showinfo=0';
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
}