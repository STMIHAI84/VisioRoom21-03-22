<?php

namespace Vich\UploaderBundle\Storage;

use League\Flysystem\FilesystemException;
use League\Flysystem\FilesystemOperator;
use League\Flysystem\MountManager;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\File\Exception\CannotWriteFileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Mapping\PropertyMappingFactory;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @final
 */
class FlysystemStorage extends AbstractStorage
{
    /**
     * @var MountManager|ContainerInterface a registry to get FilesystemInterface instances
     */
    protected $registry;

    /**
     * @param MountManager|ContainerInterface|mixed $registry
     */
    public function __construct(PropertyMappingFactory $factory, $registry)
    {
        parent::__construct($factory);

        if (!$registry instanceof MountManager && !$registry instanceof ContainerInterface) {
            throw new \TypeError(\sprintf('Argument 2 passed to %s::__construct() must be an instance of %s or an instance of %s, %s given.', __CLASS__, MountManager::class, ContainerInterface::class, \is_object($registry) ? \get_class($registry) : \gettype($registry)));
        }

        $this->registry = $registry;
    }

    public function resolveStream($obj, string $fieldName, ?string $className = null)
    {
        $path = $this->resolvePath($obj, $fieldName, $className, true);

        if (empty($path)) {
            return null;
        }

        $mapping = $this->factory->fromField($obj, $fieldName, $className);
        $fs = $this->getFilesystem($mapping);

        try {
            return $fs->readStream($path);
        } catch (FilesystemException $e) {
            return null;
        }
    }

    protected function doUpload(PropertyMapping $mapping, UploadedFile $file, ?string $dir, string $name): void
    {
        $fs = $this->getFilesystem($mapping);
        $path = !empty($dir) ? $dir . '/' . $name : $name;

        $stream = \fopen($file->getRealPath(), 'rb');
        try {
            $fs->writeStream($path, $stream, [
                'mimetype' => $file->getMimeType(),
            ]);
        } catch (FilesystemException $e) {
            throw new CannotWriteFileException($e->getMessage());
        }
    }

    protected function getFilesystem(PropertyMapping $mapping): FilesystemOperator
    {
        if ($this->registry instanceof MountManager) {
            return $this->registry;
        }

        return $this->registry->get($mapping->getUploadDestination());
    }

    protected function doRemove(PropertyMapping $mapping, ?string $dir, string $name): ?bool
    {
        $fs = $this->getFilesystem($mapping);
        $path = !empty($dir) ? $dir . '/' . $name : $name;

        try {
            $fs->delete($path);

            return true;
        } catch (FilesystemException $e) {
            return false;
        }
    }

    protected function doResolvePath(PropertyMapping $mapping, ?string $dir, string $name, ?bool $relative = false): string
    {
        $path = !empty($dir) ? $dir . '/' . $name : $name;

        if ($relative) {
            return $path;
        }

        return $path;
    }
}
