<?php

namespace DevAnime\Model\Page;

use DevAnime\Model\Object\ObjectCollection;

/**
 * Class PageCollection
 * @package DevAnime\Model\Page
 */
class PageCollection extends ObjectCollection
{
    protected static $object_class_name = PagePost::class;

    protected function getObjectHash($item)
    {
        return md5($item->ID ?: serialize($item));
    }
}
