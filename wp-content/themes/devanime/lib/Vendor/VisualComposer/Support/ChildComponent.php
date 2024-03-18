<?php

namespace DevAnime\Vendor\VisualComposer\Support;

/**
 * Class ChildComponent
 * @package DevAnime\Vendor\VisualComposer\Support
 */
class ChildComponent extends Component
{
    protected $parent;
    protected static $serialize = true;

    protected function setupConfig()
    {
        parent::setupConfig();
        $this->component_config['as_child'] = ['only' => $this->parent];
        add_filter('roronoa_zoro/children/' . $this->parent, function ($children) {
            $children[] = static::TAG;
            return $children;
        });
    }
}
