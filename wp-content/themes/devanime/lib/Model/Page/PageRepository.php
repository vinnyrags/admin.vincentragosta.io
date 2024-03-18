<?php

namespace DevAnime\Model\Page;

use DevAnime\Repository\PostRepository;

/**
 * class PageRepository
 * @package DevAnime\Model\Page
 */
class PageRepository extends PostRepository
{
    protected $model_class = PagePost::class;
}