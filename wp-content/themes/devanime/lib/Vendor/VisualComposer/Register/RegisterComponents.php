<?php

namespace DevAnime\Vendor\VisualComposer\Register;

use DevAnime\Vendor\VisualComposer\Components;

/**
 * Class ComponentRegistry
 * @package DevAnime\Vendor\VisualComposer\Register
 *
 * // TODO get file names and assemble components array that way
 */
class RegisterComponents
{
    const COMPONENTS = [
        Components\VcSection::class,
        Components\VcRow::class,
        Components\VcColumn::class,
        Components\VcColumnText::class,
        Components\VcSingleImage::class,
        Components\Tabs::class,
        Components\Tab::class,
        Components\Slide::class,
        Components\Slider::class,
        Components\Accordion::class,
        Components\AccordionPanel::class,
//        Components\Video::class,
        Components\SubNav::class,
        Components\Blockquote::class,
        Components\Button::class,
        Components\Heading::class,
        Components\Modal::class,
//        Components\ResponsiveSpacer::class
    ];

    public function __construct()
    {
        foreach(static::COMPONENTS as $Component) {
            if (class_exists($Component)) {
                $Component = new $Component;
                if (method_exists($Component, 'register')) {
                    $Component->register();
                }
            }
        }
    }
}
