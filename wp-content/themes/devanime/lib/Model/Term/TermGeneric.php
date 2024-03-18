<?php

namespace DevAnime\Model\Term;

/**
 * class TermGeneric
 * @package DevAnime\Model\Term
 */
class TermGeneric extends TermBase
{
    public function __construct($term, $taxonomy = null)
    {
        if ($taxonomy) {
            $term = get_term($term, $taxonomy);
        }
        parent::__construct($term);
    }
}