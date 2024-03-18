<?php

namespace DevAnime\Model\Post;

/**
 * class PostGeneric
 * @package DevAnime\Model\Post
 */
class PostGeneric extends PostBase
{
    protected function isValidPostInit()
    {
        return true;
    }
}