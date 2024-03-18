<?php

namespace DevAnime\Repository;

/**
 * interface Repository
 * @oackage DevAnime\Repository
 */
interface Repository extends ImmutableRepository
{
    function add($object);

    function remove($object);

}