<?php

namespace DevAnime\Vendor\VisualComposer\Support;

/**
 * Class ParentComponent
 * @package DevAnime\Vendor\VisualComposer\Support
 */
class ParentComponent extends ComponentContainer
{
    protected $init_priority = 20;
    protected $children = [];

    protected function setupConfig()
    {
        parent::setupConfig();
        $children = apply_filters('roronoa_zoro/children/' . static::TAG, $this->children);
        $this->component_config['as_parent'] = ['only' => implode(',', $children)];
    }
}
