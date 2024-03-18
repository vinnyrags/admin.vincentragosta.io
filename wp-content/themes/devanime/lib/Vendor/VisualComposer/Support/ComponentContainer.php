<?php

namespace DevAnime\Vendor\VisualComposer\Support;

/**
 * Class ComponentContainer
 * @package DevAnime\Vendor\VisualComposer\Support
 */
class ComponentContainer extends \WPBakeryShortCodesContainer implements RegistersComponentConfig
{
    const NAME = null;
    const TAG = null;
    const VIEW = null;

    use ComponentRegistrationTrait;

    public function __construct($settings = [])
    {
        $settings['base'] = static::TAG;
        parent::__construct($settings);
    }
}
