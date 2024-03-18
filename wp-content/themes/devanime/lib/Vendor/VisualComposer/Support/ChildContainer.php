<?php

namespace DevAnime\Vendor\VisualComposer\Support;

/**
 * Class ChildContainer
 * @package DevAnime\Vendor\VisualComposer\Support
 */
class ChildContainer extends ComponentContainer
{
    protected $parent;
    protected static $serialize = true;

    protected function setupConfig()
    {
        parent::setupConfig();
        $this->component_config['as_child'] = ['only' => $this->parent];
    }
}
