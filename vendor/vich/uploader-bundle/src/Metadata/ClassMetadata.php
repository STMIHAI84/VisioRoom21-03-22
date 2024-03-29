<?php

namespace Vich\UploaderBundle\Metadata;

use Metadata\ClassMetadata as BaseClassMetadata;

/**
 * @final
 *
 * @internal
 */
class ClassMetadata extends BaseClassMetadata
{
    /** @var array */
    public $fields = [];

    public function serialize(): string
    {
        return \serialize([
            $this->fields,
            parent::serialize(),
        ]);
    }

    public function unserialize($str): void
    {
        [
            $this->fields,
            $parentStr
        ] = \unserialize($str);

        parent::unserialize($parentStr);
    }
}
