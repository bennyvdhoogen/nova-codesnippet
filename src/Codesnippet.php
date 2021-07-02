<?php

namespace bennyvdhoogen\Codesnippet;

use Laravel\Nova\Fields\Field;

class Codesnippet extends Field
{
    /**
     * The field's component.
     * @var string
     */
    public $component = 'codesnippet';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->slider();
    }

    public function pickerType(string $type)
    {
        return $this->withMeta(['pickerType' => $type]);
    }

    public function palette(array $palette)
    {
        return $this->withMeta(['palette' => $palette]);
    }
}
