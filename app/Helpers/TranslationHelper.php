<?php

use App\Models\Translation;

if (!function_exists('translate')) {
        function translate($key, $locale = null)
        {
            $locale = $locale ?: app()->getLocale();
            
            $translation = Translation::where('key', $key)->first();
    
            if (!$translation) {
                return $key;
            }
    
            $translations = $translation->translations;
    
            return $translations[$locale] ?? $key;
        }
    }