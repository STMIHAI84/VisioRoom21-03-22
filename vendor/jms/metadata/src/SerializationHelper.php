<?php

declare(strict_types=1);

namespace Metadata;

trait SerializationHelper
{
    /**
     * @return string
     * @deprecated Use serializeToArray
     *
     */
    public function serialize()
    {
        return serialize($this->serializeToArray());
    }

    /**
     * @param string $str
     *
     * @return void
     * @deprecated Use unserializeFromArray
     *
     */
    public function unserialize($str)
    {
        $this->unserializeFromArray(unserialize($str));
    }

    public function __serialize(): array
    {
        return [$this->serialize()];
    }

    public function __unserialize(array $data): void
    {
        $this->unserialize($data[0]);
    }
}
