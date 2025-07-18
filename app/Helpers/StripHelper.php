<?php

if (! function_exists('stripParagraphTags')) {
    function stripParagraphTags($text) {
        // return str_replace(['<p>', '</p>'], '', $text);
        return preg_replace(['/<\/?p[^>]*>/', '/<br\s*\/?>/'], '', $text);
    }
}

