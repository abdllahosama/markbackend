<?php

namespace App\Traits;

trait TranslateVaildationTrait
{
    /**
     * @param string $proberty
     * @param array $translateRules
     * @param string|null $propertyRules
     * @return array
     */
    protected $langs = ['ar', 'en'];
    public function translate($proberty, $translateRules = ["required", "string", "min:3", "max:121"], $propertyRules = "required")
    {
        // add array to property
        $propertyRules .= '|array';
        // prepare properties
        $properties = [];
        // add property to properties
        $properties[$proberty] = $propertyRules;
        // add translate to properties
        foreach ($this->langs as $lang) {
            $properties[$proberty . '.' . $lang] = $translateRules;
        }
        // return properties
        return $properties;
    }

    public function closureValidation($property, $translation, $model, $message = "")
    {
        $colsure = function ($attr, $value, $fail) use ($property, $translation, $model, $message) {
            foreach ($translation as $key => $value) {

                $properyExists = $model::where($property . "->" . $key, $value)
                    ->exists();

                if ($properyExists) {
                    $fail(trans($message . $key));
                }
            }
        };

        return $colsure;
    }

    public function updateClosureValidation($property, $translation, $model, $id, $message = "")
    {
        $colsure = function ($attr, $value, $fail) use ($property, $translation, $model, $id, $message) {
            foreach ($translation as $key => $value) {

                $properyExists = $model::where($property . "->" . $key, $value)
                    ->where('id', '!=', $id)
                    ->exists();

                if ($properyExists) {
                    $fail(trans($message . $key));
                }
            }
        };

        return $colsure;
    }
}
