<?php

namespace App\Traits;

trait TranslateTrait
{
    /**
     * @param $jsonString
     * @param string|null $fullTranslate
     * @return string | object
     */

    protected $langs = ['ar' , 'en'];
    protected $defaultLang = 'en';

    public function translate($jsonString, $fullTranslate = false)
    {
        // valid string an change to object
        if (!is_string($jsonString)) {
            $jsonString = json_encode($jsonString);
        }
        $result = json_decode($jsonString, true);
        if ($result != null && is_array($result)){
            $data = $result;
        } else {
            $data = [];
        }

        // fill untranslated data
        foreach($this->langs as $lang) {
            if(!isset($data[$lang])) $data[$lang] = "";
        }

        // if need specifc translate
        if (!$fullTranslate) {
            // get current language
            $lang = apache_request_headers()['Accept-Language'] ?? $this->defaultLang;
            // if lang not supported use default
            if (!in_array($lang, $this->langs)) $lang = $this->defaultLang;
            // return translated data
            $translate = $data[$lang] ?? '';
        }
        // else return all translate data
        else {
            $translate = $data;
        }

        // return data
        return $translate;
    }
}
