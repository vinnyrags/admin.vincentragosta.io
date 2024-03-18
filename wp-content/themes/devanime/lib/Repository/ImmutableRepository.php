<?php

namespace DevAnime\Repository;

/**
 * interface ImmutableRepository
 * @package DevAnime\Repository
 */
interface ImmutableRepository
{
    function findById($id);

    function findOne(array $query);

    function findAll();

    function find(array $query);

}