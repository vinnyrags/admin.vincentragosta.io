<?php

namespace DevAnime\Model\Rest;

/**
 * class DataTransferObject
 * @package DevAnime\Model\Rest
 */
abstract class DataTransferObject implements \JsonSerializable
{
    public function jsonSerialize()
    {
        $data = $this->getData();
        $keys = array_keys($data);
        $values = array_values($data);
        $keys = array_map('DevAnime\Util::toCamelCase', $keys);
        return array_combine($keys, $values);
    }

    public function getData()
    {
        return get_object_vars($this);
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }

    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }

    public function __isset($name)
    {
        return isset($this->$name);
    }
}
