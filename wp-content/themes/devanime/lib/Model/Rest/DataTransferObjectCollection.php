<?php

namespace DevAnime\Model\Rest;

use DevAnime\Model\Object\ObjectCollection;

/**
 * class DataTransferObjectCollection
 * @package DevAnime\Model\Rest
 */
abstract class DataTransferObjectCollection extends ObjectCollection implements \JsonSerializable
{
    protected static $object_class_name = DataTransferObject::class;

    public function __construct(iterable $items = [])
    {
        $dto_items = [];
        foreach ($items as $item) {
            if ($dto = $this->getDataTransferObject($item)) {
                $dto_items[] = $dto;
            }
        }
        parent::__construct($dto_items);
    }

    public function jsonSerialize()
    {
        return $this->getAll();
    }

    public function getItems(): array
    {
        return $this->getAll();
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }

    protected function getDataTransferObject($item): DataTransferObject
    {
        if (! $item instanceof DataTransferObject) {
            $item = $this->createDataTransferObject($item);
        }
        return $item;
    }

    protected function getObjectHash($item)
    {
        return md5($item);
    }


    /**
     * @param object $item
     * @return DataTransferObject
     */
    abstract protected function createDataTransferObject($item): DataTransferObject;
}
