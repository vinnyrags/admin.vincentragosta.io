<?php

namespace DevAnime\Factory;

use DevAnime\Model;

/**
 * class TermFactory
 * @package DevAnime\Factory
 */
class TermFactory
{
    protected static $models = [];

    public function create($term = null, $taxonomy = null)
    {
        if ($taxonomy) {
            $term = get_term($term, $taxonomy);
        }
        $model_class = static::$models[$term->taxonomy] ?? Model\Term\TermGeneric::class;
        return new $model_class($term);
    }

    public static function registerTermModel($model_class)
    {
        if (!is_a($model_class, Model\Term\TermBase::class, true)) {
            throw new \InvalidArgumentException('Invalid term factory registration');
        }
        $taxonomy = $model_class::TAXONOMY;
        static::$models[$taxonomy] = $model_class;
    }
}