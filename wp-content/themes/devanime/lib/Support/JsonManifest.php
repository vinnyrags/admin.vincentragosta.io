<?php

namespace DevAnime\Support;

/**
 * Class JsonManifest
 * @package DevAnime\Support
 */
class JsonManifest
{
    private $manifest;

    public function __construct($manifest_path)
    {
        if (file_exists($manifest_path)) {
            $this->manifest = json_decode(file_get_contents($manifest_path), true);
        } else {
            $this->manifest = [];
        }
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->manifest;
    }

    /**
     * @param string $key
     * @param null $default
     *
     * @return array|mixed|null
     */
    public function getPath($key = '', $default = null)
    {
        $collection = $this->manifest;
        if (is_null($key)) {
            return $collection;
        }
        if (isset($collection[$key])) {
            return $collection[$key];
        }
        foreach (explode('.', $key) as $segment) {
            if (!isset($collection[$segment])) {
                return $default;
            } else {
                $collection = $collection[$segment];
            }
        }

        return $collection;
    }
}