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

      /**
     * Indicates if the element should be shown on the index view.
     *
     * @var \Closure|bool
     */
    public $showOnIndex = false;

    /**
     * Indicates if the element should be shown on the detail view.
     *
     * @var \Closure|bool
     */
    public $showOnDetail = false;

    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var \Closure|bool
     */
    public $showOnCreation = false;

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
    }

    public function onlyShowWhenFieldHasValue($field, $value)
    {
        return $this->withMeta(["linked_field" => $field, "linked_field_check_value" => $value]);
    }
}
